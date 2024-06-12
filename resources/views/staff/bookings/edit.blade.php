@extends('layouts.app')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    {{-- <div class="page-pretitle">
                        <a class="flex align-items-center gap-2" href="{{route('staff.bookings.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M5 12l4 4" />
                                <path d="M5 12l4 -4" />
                            </svg>
                             <span>{{ __('Back to Booking List') }}</span>
                        </a>
                    </div> --}}
                    <h2 class="page-title">
                        {{ __('Edit Booking') }}
                    </h2>
                </div>

            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Booking Details') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('staff.bookings.update', $booking->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label required">{{ __('Username') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id="" disabled
                                    value="{{$patient->username}}" name="username">
                            </div>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="hidden" name="userId" value="{{auth()->id()}}">
                        <div class="mb-3">
                            <label class="form-label">{{ __('Firstname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id="" disabled
                                    value="{{$patient->firstname}}" name="firstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Lastname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id="" disabled
                                    value="{{$patient->lastname}}" name="lastname">
                            </div>
                            @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Phone Number') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id="" disabled
                                   value="{{$patient->phone}}" placeholder="Enter Phone Number" name="phone">
                            </div>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Doctor') }}</label>
                            <div>
                                <select class="form-select w-33" name="doctor_id">
                                    <option value="">{{ __('Select Doctor') }}</option>
                                    @foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->id }}" @if($doctor->id == $booking->doctor_id) selected @endif>{{ $doctor->firstname }} {{ $doctor->lastname }}</option>
                                    @endforeach
                                </select>

                            </div>
                            @error('doctor_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                                        <div class="form-label">{{ __('Booking Date') }}</div>

                                        <div class="d-flex flex-wrap ">
                                            <div>
                                                <input type="text"
                                                value="{{ $booking->booking_date }}"
                                                    class="form-control flatpickr flatpickr-date w-fit"
                                                    name="booking_date" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-label">{{ __('Booking Time') }}</div>

                                        <div class="d-flex flex-wrap">
                                                <div>
                                                    <select class="form-select" name="booking_time" id="booking_time" required>
                                                        <?php
                                                            $formatted_booking_time = date('H:i', strtotime($booking->booking_time));

                                                            for ($hour = 10; $hour < 16; $hour++) {
                                                                for ($minute = 0; $minute < 60; $minute += 15) {
                                                                    $formatted_hour = sprintf('%02d', $hour);
                                                                    $formatted_minute = sprintf('%02d', $minute);
                                                                    $time_value = $formatted_hour . ':' . $formatted_minute;
                                                                    $selected = ($time_value == $formatted_booking_time) ? 'selected' : '';
                                                                    printf('<option value="%s" %s>%s</option>', $time_value, $selected, $time_value);
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>


                        <div class="mb-3">
                            <label class="form-label">{{ __('Reason for Booking') }}</label>
                            <div>
                                <textarea class="form-control w-33" aria-describedby="" id="" name="reason" rows="6"
                                    placeholder="Enter Reason for Booking">{{$booking->reason}}</textarea>
                            </div>
                            @error('reason')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div class="form-label">{{ __('Set Status') }}</div>
                            <select class="form-select w-33" name="status">
                                <option value="">{{ __('Select Status') }}</option>
                                <option value="approved" @if($booking->status == 'approved') selected @endif>{{ __('Approved') }}</option>
                                <option value="pending" @if($booking->status == 'pending') selected @endif>{{ __('Pending') }}</option>
                                {{-- <option value="rejected" @if($booking->status == 'rejected') selected @endif>{{ __('Rejected') }}</option> --}}
                            </select>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary bg-azure">{{ __('Save Details') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        var disabledDates = @json($disabledDates);
        var convertedDisabledDates = [];
        disabledDates?.forEach(function(date) {
            if (date.includes(" to ")) {
                var range = date.split(" to ");
                var fromDate = new Date(range[0]);
                var toDate = new Date(range[1]);
                var currentDate = fromDate;

                while (currentDate <= toDate) {
                    convertedDisabledDates.push(currentDate.toISOString().split('T')[0]);
                    currentDate.setDate(currentDate.getDate() + 1);
                }
            } else {
                convertedDisabledDates.push(date);
            }
        });

        flatpickr('.flatpickr-date', {
        enableTime: false,
        dateFormat: "Y-m-d",
        minDate: "today",
        // // dates has comma separated dates in string format like "2023-05-30,2023-06-01" 
        disable: [
            function(date) {
                // return true to disable

                return  convertedDisabledDates.includes(date.toLocaleDateString('en-CA'));
            }
        ],



        // onChange: function(selectedDates, dateStr) {
        //     var dayTimes = formatSelectedDate();
        //     var selectedDate = selectedDates[0];
        //     dayOfWeekString = selectedDate.toLocaleDateString('en-US', {
        //         weekday: 'long'
        //     }).toLowerCase();
        //     var selectedDayStart = dayTimes[dayOfWeekString].start;
        //     var selectedDayEnd = dayTimes[dayOfWeekString].end;

        //     // Assuming you want to display the day of the week in the console
        //     console.log("Selected day of the week:", dayOfWeekString);
        //     console.log("Start time:", selectedDayStart);
        //     console.log("End time:", selectedDayEnd);

        //     $('.jqtimepicker').timepicker('option', 'minTime', selectedDayStart);
        //     $('.jqtimepicker').timepicker('option', 'maxTime', selectedDayEnd);
        // }

    });

    $('.jqtimepicker').timepicker({
    timeFormat: 'HH:mm',
    interval: 15,
    minTime: '10:00',
    maxTime: '17:45',
    
    dynamic: false,
    dropdown: true,
    scrollbar: true,
    disableTimeRanges: [
        ['11:00', '12:00'], // Disables from 11:00 to 12:00
        ['14:30', '15:30']  // Disables from 14:30 to 15:30
    ]
});

    </script>
@endsection

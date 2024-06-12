@extends('layouts.app')
@section('content')
    <style>
        .dataTables_length,
        .dataTables_filter,
        .dataTables_info,
        .dataTables_paginate {
            margin: 10px !important;
        }
    </style>
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">
                        {{ __('Booking Settings') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        {{-- <div class="btn-list">

                            <a href="{{ route('patient.bookings.create') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                {{ __('Create New Booking') }}
                            </a>

                        </div> --}}
                    </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    {{ __('Booking Settings') }}
                    
                </div>
                <form class="" action="{{ route('staff.bookings.updateSettings') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    
                        <div class="mb-3 row">
                        <label class="col-3 col-form-label">Exceptions</label>
                        <div class="col">
                            <div id="exception-fields">
                                @if ($settings->disabled_dates != null)
                                    @foreach ($settings->disabled_dates as $date)
                                        <div class="d-flex gap-3 mb-2 exeption-box flex-wrap">


                                            <div class="date-range-field">
                                                <input type="text" name="disabled_dates[]"
                                                    class="date-check flatpickr-daterange form-control date-range-input"
                                                    value="{{ $date }}">
                                            </div>
                                            <button type="button" class="btn bg-danger text-white remove-exception"
                                                data-id="{{ $settings->id }}">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16"
                                                    height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd"
                                                        d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                            </button>

                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            <small>Note: You can select date range here. If you want to select only one date, select the same date
                                twice.</small>
                            <div>
                                <button type="button" class="btn bg-success text-white" id="add-exception"><svg stroke="currentColor"
                                        fill="currentColor" stroke-width="0" t="1551322312294" viewBox="0 0 1024 1024"
                                        version="1.1" pId="10297" height="1em" width="1em"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <defs></defs>
                                        <path d="M474 152m8 0l60 0q8 0 8 8l0 704q0 8-8 8l-60 0q-8 0-8-8l0-704q0-8 8-8Z"
                                            pId="10298">
                                        </path>
                                        <path d="M168 474m8 0l672 0q8 0 8 8l0 60q0 8-8 8l-672 0q-8 0-8-8l0-60q0-8 8-8Z"
                                            pId="10299">
                                        </path>
                                    </svg> Add More
                                </button>
                            </div>
                        </div>
                    </div>
                        <div class="mb-3 row">
                        <label class="col-3 col-form-label">Time Interval</label>
                        <div class="col">
                            <select class="form-select w-max" name="time_interval">
                                <option value="60" {{ $settings->time_interval == 60 ? 'selected' : '' }}>Every 60 minutes
                                </option>
                                <option value="30" {{ $settings->time_interval == 30 ? 'selected' : '' }}>Every 30 minutes
                                </option>
                                <option value="15" {{ $settings->time_interval == 15 ? 'selected' : '' }}>Every 15 minutes
                                </option>
                                <option value="10" {{ $settings->time_interval == 10 ? 'selected' : '' }}>Every 10 minutes
                                </option>
                                <option value="5" {{ $settings->time_interval == 5 ? 'selected' : '' }}>Every 5 minutes
                                </option>
                            </select>
                            <small class="text-secondary">Select the number of minutes between each available time.</small>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-end">
        <button type="submit" class="btn bg-primary text-white">Save Settings</button>
    </div>
</form>

                </div>
            </div>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        flatpickr('.flatpickr-input',{
           enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
        })
        flatpickr('.flatpickr-daterange',{
            mode: 'range',
            minDate: "today"
        })

        $("#add-exception").click(function() {
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('input[name="date"]').attr("content"),
                },
                url: base_path + "addExceptions",
                method: "GET",
                success: function(data) {
                    $("#exception-fields").append(data);
                    $(".flatpickr-daterange").flatpickr({
                        mode: 'range',
                        minDate: "today"
                    });


                },
            });
        });
        $(document).on("click", ".remove-exception", function(e) {
            // remove holiday box
            $(this).parent(".exeption-box").remove();
            // $(".holiday-box").remove();
        });


    });
    
</script>
@endsection

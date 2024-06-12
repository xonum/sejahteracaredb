@extends('layouts.app')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Overview
                    </div>
                    <h2 class="page-title">
                        Dashboard
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    {{-- <div class="btn-list">

                        <a href="{{route('patient.bookings.create')}}" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-report">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            Create new booking
                        </a>

                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="page-body">
        <div class="container-xl">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        My Recent Bookings
                    </div>
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>{{ __('ID') }}</th>
                            <th>{{ __('Doctor') }}</th>
                            <th>{{ __('Date') }}</th>
                            <th>{{ __('Time') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($bookings as $booking)
                        <tr>
                          <td>{{ $booking->id }}</td>
                            <td>{{ $booking->doctor_id ? $booking->doctor->firstname . ' ' . $booking->doctor->lastname : "N/A" }}</td>
                            <td>{{ $booking->booking_date }}</td>
                            <td>{{ $booking->booking_time }}</td>
                            <td>
                                @if($booking->status == 'approved')
                                    <span class="badge bg-green-lt">Approved</span>
                                @elseif($booking->status == 'pending')
                                    <span class="badge bg-red-lt">Pending</span>
                                @else
                                    {{ $booking->status }}
                                @endif
                            </td>
                            <td>
                                @if($booking->report != null )
                                    <a href="{{route('patient.reports', $booking->id)}}" class="btn btn-sm btn-primary">{{ __('View Reports') }}</a>
                                    @endif
                                <a href="{{ route('patient.bookings.edit', $booking->id) }}" class="btn btn-sm btn-secondary">{{ __('Edit') }}</a>
                                <form action="{{ route('patient.bookings.destroy', $booking->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger bg-danger"
                                                onclick="return confirm('Are you sure?')">{{ __('Delete') }}</button>                                </form>
                            </td>

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection

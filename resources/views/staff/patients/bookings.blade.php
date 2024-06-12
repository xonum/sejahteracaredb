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
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                        {{ __('Bookings') }}
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
                    {{ __('List of Bookings') }}
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>{{ __('Booking ID') }}</th>
                          <th>{{ __('Patient') }}</th>
                            <th>{{ __('Doctor') }}</th>
                            <th>{{ __('Date') }}</th>
                            <th>{{ __('Time') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($bookings->reverse() as $booking)
                        <tr>
                          <td>{{ $booking->id }}</td>
                                <td>{{ $booking->user->firstname . ' ' . $booking->user->lastname }}</td>

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
                                @if($booking->status == 'approved')
 
                                        <a href="{{route('staff.bookings.reports.index', $booking->id)}}" class="btn btn-sm btn-success">
                                            {{ __('View Reports') }}
                                        </a>
 
                                @else
                                    <a href="{{ route('staff.bookings.edit', $booking->id) }}" class="btn btn-sm btn-secondary">{{ __('Edit') }}</a>
                                @endif
                            </td>

                        </tr>
                        <form method="POST" action="{{ route('upload.report') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal modal-blur fade" id="modal-small" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                                            <input type="file" name="report_file" id="report_file">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn bg-primary text-white">Upload</button>
                                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach


                        
                      </tbody>
                    </table>
                    
                  </div>
            </div>
        </div>
    </div>
@endsection

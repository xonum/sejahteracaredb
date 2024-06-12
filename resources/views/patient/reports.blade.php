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
                    <a class="page-pretitle flex align-items-center" href="/patient/bookings">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>      
                  {{ __('Back to Bookings') }}
                    </a>
                    <h2 class="page-title">
                        {{ __('Reports') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">

                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-small">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                {{ __('Add New Report') }}
                            </a>
                            <form method="POST" action="{{ route('upload.reports') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal modal-blur fade" id="modal-small" tabindex="-1" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                                            <input type="file" name="report_file[]" id="report_file" multiple>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn bg-primary text-white">Upload</button>
                                            <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        </div>
                    </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    {{ __('List of Reports for Booking#') }}{{ $booking->id }}
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>{{ __('No.') }}</th>
                            <th>{{ __('Booking ID') }}</th>
                            <th>{{ __('Report') }}</th>
                            <th>{{ __('Actions') }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($files as $file)
                        <tr>
                          <td>{{ $file['id'] }}</td>
                            <td>{{ $booking->id }}</td>
                            <td>{{ Str::after($file['report'], 'reports/') }}</td>
                            <td>
                                {{-- <a href="{{ URL::to('/')}}/{{$file['report']}}" class="btn btn-success btn-sm" target="_blank">{{ __('View File') }}</a>
                                <a href="{{ URL::to('/')}}/{{$file['report']}}" class="btn btn-sm btn-info" download="">{{ __('Download File') }}</a> --}}
                                <a href="{{ $file['report']}}" class="btn btn-success btn-sm" target="_blank">{{ __('View File') }}</a>
                                <a href="{{$file['report']}}" class="btn btn-sm btn-info" download="">{{ __('Download File') }}</a>
                                <form action="{{ route('delete.report') }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="report" value="{{ $file['report'] }}">
                                    <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                                    <button type="submit" class="btn btn-sm btn-danger bg-danger"
                                            onclick="return confirm('Are you sure?')">{{ __('Delete') }}</button>
                                </form>                          
                            </td>

                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>
                
            </div>
        </div>
    </div>

@endsection

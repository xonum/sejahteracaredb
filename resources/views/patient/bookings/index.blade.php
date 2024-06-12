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
                        {{ __('My Bookings') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">

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
                    {{ __('List of Bookings') }}
                </div>
                <div class="table-responsive">
                    <table id="pt-bookings" class="row-border hover card-table table-vcenter datatable"
                                    style="width:100%">

                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Doctor</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                    </table>         
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            });
            $('#pt-bookings').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('getPTBookings') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'booking_date'
                    },
                    {
                        data: 'booking_time'
                    },
                    {
                        data: 'doctor'
                    },
                    {
                        data: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true
                    },
                ],
                order: [[0, "desc"]],
            });
        });
    </script>
@endsection

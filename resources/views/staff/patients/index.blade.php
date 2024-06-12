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
                        {{ __('Patients') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        {{-- <div class="btn-list">

                            <a href="{{ route('staff.doctors.create') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                {{ __('Add New Patient') }}
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
                    {{ __('List of Patients') }}
                </div>

                  <div class="table-responsive">
                                <table id="st-patients" class="row-border hover card-table table-vcenter datatable"
                                    style="width:100%">

                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th>Matric ID</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
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
            $('#st-patients').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('getSTPatients') }}",
                columns: [{
                        data: 'id'
                    },
                    {
                        data: 'username'
                    },
                    {
                        data: 'firstname'
                    },
                    {
                        data: 'lastname'
                    },
                    {
                        data: 'email'
                    },
                    {
                        data: 'phone'
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

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
                        {{ __('Doctors') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">

                            <a href="{{ route('staff.doctors.create') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                {{ __('Add New Doctor') }}
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
                    {{ __('List of Doctors') }}
                </div>
                <div class="table-responsive">
                    <table id="st-docs" class="row-border hover card-table table-vcenter datatable"
                                    style="width:100%">
                      <thead>
                        <tr>
                          <th>{{ __('ID') }}</th>
                                <th>{{ __('Username') }}</th>
                                <th>{{__('Firstname')}}</th>
                                <th>{{__('Lastname')}}</th>
                                <th>{{ __('Email Address') }}</th>
                                <th>{{ __('Phone Number') }}</th>
                                <th>{{ __('Role') }}</th>
                                <th>{{ __('Designation') }}</th>
                                <th>{{ __('Actions') }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($doctors as $doctor)
                                <tr>
                                    <td>{{ $doctor->id }}</td>
                                    <td>{{ $doctor->username }}</td>
                                    <td>{{ $doctor->firstname }}</td>
                                    <td>{{ $doctor->lastname }}</td>
                                    <td>{{ $doctor->email }}</td>
                                    <td>{{ $doctor->phone }}</td>
                                    <td>{{ $doctor->role }}</td>
                                    <td>{{ $doctor->designation }}</td>
                                    <td>
                                        <a href="{{ route('staff.doctors.edit', $doctor->id) }}"
                                        {{-- <a href="#" --}}
                                            class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                        <form action="{{ route('staff.doctors.destroy', $doctor->id) }}" method="post"
                                        {{-- <form action="#" method="post" --}}
                                            style="display: inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger bg-danger"
                                                onclick="return confirm('Are you sure?')">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        
                      </tbody>
                    </table>
                    <div class="card-footer">
                        @if ($doctors->hasPages())
                            <div class="table-pagination">
                                {{ $doctors->links('pagination::bootstrap-5') }}
                            </div>
                        @endif
                    </div>
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
            $('#st-docs').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('getSTDoctors') }}",
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
                        data: 'role'
                    },
                    {
                        data: 'designation'
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

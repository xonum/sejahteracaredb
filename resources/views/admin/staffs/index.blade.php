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
                        {{ __('Staffs') }}
                    </h2>
                </div>
                <!-- Page title actions -->
                    <div class="col-auto ms-auto d-print-none">
                        <div class="btn-list">

                            <a href="{{ route('admin.staffs.create') }}" class="btn btn-primary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M12 5l0 14" />
                                    <path d="M5 12l14 0" />
                                </svg>
                                {{ __('Add New Staff') }}
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
                    {{ __('List of Staffs') }}
                </div>
                <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>{{ __('ID') }}</th>
                                <th>{{ __('Username') }}</th>
                                <th>{{__('Firstname')}}</th>
                                <th>{{__('Lastname')}}</th>
                                <th>{{ __('Email Address') }}</th>
                                <th>{{ __('Role') }}</th>
                                <th>{{ __('Phone Number') }}</th>
                                <th>{{ __('Actions') }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($staffs as $staff)
                                <tr>
                                    <td>{{ $staff->id }}</td>
                                    <td>{{ $staff->username }}</td>
                                    <td>{{ $staff->firstname }}</td>
                                    <td>{{ $staff->lastname }}</td>
                                    <td>{{ $staff->email }}</td>
                                    <td>{{ $staff->role }}</td>
                                    <td>{{ $staff->phone }}</td>
                                    <td>
                                        <a href="{{ route('admin.staffs.edit', $staff->id) }}"
                                        {{-- <a href="#" --}}
                                            class="btn btn-sm btn-primary">{{ __('Edit') }}</a>
                                        <form action="{{ route('admin.staffs.destroy', $staff->id) }}" method="post"
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
                        @if ($staffs->hasPages())
                            <div class="table-pagination">
                                {{ $staffs->links('pagination::bootstrap-5') }}
                            </div>
                        @endif
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection

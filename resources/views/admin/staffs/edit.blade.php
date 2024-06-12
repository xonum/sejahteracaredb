@extends('layouts.app')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        <a class="flex align-items-center gap-2" href="{{route('admin.staffs.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M5 12l4 4" />
                                <path d="M5 12l4 -4" />
                            </svg>
                             <span>{{ __('Back to Staff List') }}</span>
                        </a>
                    </div>
                    <h2 class="page-title">
                        {{ __('Add New Staff') }}
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
                    <h3 class="card-title">{{ __('Staff Details') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.staffs.update', $staff->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label required">{{ __('Username') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id="" required
                                    value="{{$staff->username}}" name="username">
                            </div>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Firstname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$staff->firstname}}" name="firstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Lastname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$staff->lastname}}" name="lastname">
                            </div>
                            @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">{{ __('Email') }}</label>
                            <div>
                                <input type="email" class="form-control w-33" aria-describedby="" id="" required
                                    value="{{$staff->email}}" name="email">
                            </div>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('Password') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    placeholder="Enter Password" name="password">
                                    <small class="text-red-600">* Miniumum 6 letters</small>
                            </div>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Phone Number') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$staff->phone}}" name="phone">
                            </div>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Address') }}</label>
                            <textarea class="form-control w-33" rows="5" name="address" placeholder="Enter Address">{{$staff->address}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Profile Picture') }}</label>
                            <div>
                                <a href="{{$staff->profile_picture}}" target="_blank"><img src="{{$staff->profile_picture ?? 'assets/images/default-pro.jpg'}}" alt="Profile Picture" class="rounded-full h-20 w-20"></a>
                                <input type="file" class="form-control w-33" id="profile_picture" name="profile_picture">
                            </div>
                            @error('profile_picture')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary bg-azure">{{ __('Save Details') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        <a class="flex align-items-center gap-2" href="{{route('staff.doctors.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M5 12l4 4" />
                                <path d="M5 12l4 -4" />
                            </svg>
                             <span>{{ __('Back to Doctor List') }}</span>
                        </a>
                    </div>
                    <h2 class="page-title">
                        {{ __('Add New Doctor') }}
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
                    <h3 class="card-title">{{ __('Doctor Details') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('staff.doctors.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label required">{{ __('Designation') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id="" required
                                    placeholder="Enter Designation" name="designation">
                            </div>
                            @error('designation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">{{ __('Doctor ID') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id="" required
                                    placeholder="Enter Doctor ID" name="username">
                            </div>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Firstname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    placeholder="Enter Firstname" name="firstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Lastname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    placeholder="Enter Lastname" name="lastname">
                            </div>
                            @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">{{ __('Email') }}</label>
                            <div>
                                <input type="email" class="form-control w-33" aria-describedby="" id="" required
                                    placeholder="Enter Email" name="email">
                            </div>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label required">{{ __('Password') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id="" required
                                    placeholder="Enter Password" name="password">
                                    <small class="text-red-600">* Miniumum 6 letters</small>
                            </div>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label required">{{ __('Phone Number') }}</label>
                            <div>
                                {{-- <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    placeholder="Enter Phone Number" name="phone"> --}}
                                    <input type="text" name="phone" class="form-control w-33" pattern="[0-9]*" inputmode="numeric" placeholder="Enter Phone Number" maxlength="12" autocomplete="off" required />
                            </div>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Address') }}</label>
                            <textarea class="form-control" rows="5" name="address" placeholder="Enter Address"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Profile Picture') }}</label>
                            <div>
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

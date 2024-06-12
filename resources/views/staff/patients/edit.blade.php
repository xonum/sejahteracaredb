@extends('layouts.app')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        <a class="flex align-items-center gap-2" href="{{route('staff.patients.index')}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-left"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M5 12l4 4" />
                                <path d="M5 12l4 -4" />
                            </svg>
                             <span>{{ __('Back to Patient List') }}</span>
                        </a>
                    </div>
                    <h2 class="page-title">
                        {{ __('Edit Patient') }}
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
                    <h3 class="card-title">{{ __('Patient Details') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('staff.patients.update', $patient->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">{{ __('Matric ID') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$patient->username}}" name="username">
                            </div>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Firstname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$patient->firstname}}" name="firstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Lastname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$patient->lastname}}" name="lastname">
                            </div>
                            @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Email') }}</label>
                            <div>
                                <input type="email" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$patient->email}}" name="email">
                            </div>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('Password') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    placeholder="Enter New Password" name="password">
                                    <small class="text-red-600">* Miniumum 6 letters</small>
                            </div>
                            @error('password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Phone Number') }}</label>
                            <div>
                             <input type="text" name="phone" class="form-control w-33" pattern="[0-9]*" inputmode="numeric" value="{{$patient->phone}}" maxlength="12" autocomplete="off" required />

                            </div>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Address') }}</label>
                            <textarea class="form-control" rows="5" name="address" placeholder="Enter Address">{{$patient->address}}</textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-label">{{ __('Set Status') }}</div>
                            <select class="form-select w-auto" name="status">
                                <option value="1" {{$patient->status == 1 ? 'selected' : ''}}>Active</option>
                                <option value="0" {{$patient->status == 0 ? 'selected' : ''}}>Inactive</option>
                            </select>
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

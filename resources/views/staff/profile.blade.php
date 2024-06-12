@extends('layouts.app')
@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    
                    <h2 class="page-title">
                        {{ __('Edit Profile') }}
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
                    <h3 class="card-title">{{ __('Profile Details') }}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('staff.profile.update', $user->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">{{ __('Staff ID') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$user->username}}" name="username">
                            </div>
                            @error('username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Firstname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$user->firstname}}" name="firstname">
                            </div>
                            @error('firstname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Lastname') }}</label>
                            <div>
                                <input type="text" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$user->lastname}}" name="lastname">
                            </div>
                            @error('lastname')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">{{ __('Email') }}</label>
                            <div>
                                <input type="email" class="form-control w-33" aria-describedby="" id=""
                                    value="{{$user->email}}" name="email">
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
                             <input type="text" name="phone" class="form-control w-33" pattern="[0-9]*" inputmode="numeric" value="{{$user->phone}}" maxlength="12" autocomplete="off" required />

                            </div>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        
                        
                        <div class="mb-3">
                            <label class="form-label">{{ __('Address') }}</label>
                            <textarea class="form-control" rows="5" name="address" placeholder="Enter Address">{{$user->address}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('Profile Picture') }}</label>
                            <div>
                                <a href="{{$user->profile_picture}}" target="_blank"><img class="img-thumbnail" src="{{$user->profile_picture ?? URL::to('/').'/assets/images/default-pro.jpg'}}" alt="Profile Picture" class="rounded-full h-20 w-20"></a>
                                <input type="file" class="form-control w-33" id="profile_picture" name="profile_picture">
                            </div>
                            @error('profile_picture')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">{{ __('Upload ID Card') }}</label>
                            <div>
                                @if($user->matric_card)
                                    <a href="{{$user->matric_card}}" target="_blank"><img class="img-thumbnail" src="{{$user->matric_card}}" alt="Matric Card" class="rounded-full h-20 w-20"></a>
                                @endif
                                <input type="file" class="form-control w-33" id="matric_card" name="matric_card">
                            </div>
                            @error('matric_card')
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

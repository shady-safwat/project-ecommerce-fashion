@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">User Profile</h4>
                <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                @error('name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email Address">
                                @error('email')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="date" class="form-control" name="date_of_birth" placeholder="Date Of Birth">
                                @error('date_of_birth')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <select class="form-control" name="gender" aria-label="Default select example">
                                    <option value="" disable selected hidden> Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                                @error('gender')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="tel" class="form-control" name="phone" placeholder="phone">
                            </div>
                            @error('phone')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="address" placeholder=" Address">
                                @error('address')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <select class="form-control" name="role_id" aria-label="Default select example">
                                    <option value="" disable selected hidden>Select Your Role</option>
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="country" placeholder="Country">
                                @error('country')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="city" placeholder="City">
                            </div>
                            @error('city')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="state" placeholder="State">
                                @error('state')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="zip_code" placeholder="Zip Code">
                                @error('zip_code')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="file" class="form-control" name="image" style="z-index:1;opacity:1;position:relative;">
                                @error('image')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-left">Create Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-profile">
                <div class="card-avatar">
                    <a href="javascript:;">
                        @foreach ($profiles as $profile)
                            @if($profile->image)
                                <img class="img" src="{{asset('adminpanel\img\faces')}}\{{$profile->image}}" alt="profile_image">
                            @else
                                <img class="img" src="{{asset('adminpanel\img\faces\profile.png')}}" alt="profile_image">
                            @endif
                        @endforeach
                    </a>
                </div>
                <div class="card-body mt-2">
                    @foreach ($profiles as $profile)
                    <h5 class="card-category text-gray">{{$profile->name}}</h5>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

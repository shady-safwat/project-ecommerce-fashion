@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Edit User Profile</h4>
                <p class="card-category">Edit your profile</p>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('profile.update',$profile->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="first_name" value="{{$profile->name}}">
                                @error('first_name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="email" class="form-control" name="email" value="{{$profile->email}}">
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
                                <input type="date" class="form-control" name="date_of_birth" value="{{$profile->date_of_birth}}">
                                @error('date_of_birth')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <select class="form-control" name="gender"  aria-label="Default select example">
                                    <option  selected hidden> {{$profile->gender}}</option>
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
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="tel" class="form-control" name="phone" value="{{$profile->phone}}">
                            </div>
                            @error('phone')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="address" value="{{$profile->address}}">
                                @error('address')
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
                                <input type="text" class="form-control" name="country" value="{{$profile->country}}">
                                @error('country')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="city" value="{{$profile->city}}">
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
                                <input type="text" class="form-control" name="state" value="{{$profile->state}}">
                                @error('state')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="zipcode" value="{{$profile->zip_code}}">
                                @error('zipcode')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="file" class="form-control" name="image"  style="z-index:1;opacity:1;position:relative;">
                                @error('image')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-left">Update Profile</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-profile">
            <div class="card-avatar">
                <a href="javascript:;">
                    <img class="img" src="{{asset('adminpanel\img\faces')}}\{{$profile->image}}" alt="profile_image">
                </a>
            </div>
            <div class="card-body mt-2">
                <h5 class="card-category text-gray">{{$profile->name}}</h5>
            </div>
        </div>
    </div>
</div>
@endsection

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
                <form method="" action="">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="first_name" value="{{$profile->name}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="email" class="form-control" name="email" value="{{$profile->email}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="date" class="form-control" name="date_of_birth" value="{{$profile->date_of_birth}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="gender" value="{{$profile->gender}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="tel" class="form-control" name="phone" value="{{$profile->phone}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="address" value="{{$profile->address}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="country" value="{{$profile->country}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="city" value="{{$profile->city}}" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="state" value="{{$profile->state}}" disabled>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                                <input type="text" class="form-control" name="zipcode" value="{{$profile->zip_code}}" disabled>
                            </div>
                        </div>
                    </div>

                    <a type="submit" href="{{route('profile.index')}}" class="btn btn-primary pull-left">Back</a>
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

@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Personal Information Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Date Of Birth</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Email Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profiles as $profile)
                                    <tr>
                                        <td>{{$profile->id}}</td>
                                        <td><img src="{{URL::asset('adminpanel\img\faces')}}\{{$profile->image}}" width="100px" alt="profile_image"></td>
                                        <td>{{$profile->name}}</td>
                                        <td>{{$profile->date_of_birth}}</td>
                                        <td>{{$profile->gender}}</td>
                                        <td>{{$profile->phone}}</td>
                                        <td>{{$profile->email}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Address Table</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>Address</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($profiles as $profile)
                                    <tr>
                                        <td>{{$profile->address}}</td>
                                        <td>{{$profile->country}}</td>
                                        <td>{{$profile->city}}</td>
                                        <td>{{$profile->state}}</td>
                                        <td>{{$profile->zip_code}}</td>
                                        <td>{{ \Carbon\Carbon::parse($profile->created_at)->diffForHumans() }}</td>
                                        <td>
                                            
                                            @if ($profile->role_id == 1)
                                                <a href="{{route('profile.show',$profile->id)}}" class="btn btn-info">Show</a>
                                                <a href="{{route('profile.edit',$profile->id)}}" class="btn btn-waring">Edit</a>
                                                <form method="post" action="{{route('profile.destroy',$profile->id)}}"  style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="Delete" class="btn btn-danger">
                                                </form>
                                            @elseif($profile->role_id == 2)
                                                <a href="{{route('profile.show',$profile->id)}}" class="btn btn-info">Show</a>
                                            @endif

                                            
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="{{route('profile.create')}}" class="btn btn-primary pull-left">Add User Profile<div class="ripple-container"></div></a>
</div>
@endsection

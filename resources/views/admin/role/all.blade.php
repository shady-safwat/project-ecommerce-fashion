@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">All Roles</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Created-at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{$role->id}}</td>
                                        <td>{{$role->name}}</td>
                                        <td>{{ \Carbon\Carbon::parse($role->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{route('role.show',$role->id)}}" class="btn btn-info">Show</a>
                                            <a href="{{route('role.edit',$role->id)}}" class="btn btn-waring">Edit</a>
                                            <form method="post" action="{{route('role.destroy',$role->id)}}"  style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
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
    <a href="{{route('role.create')}}" class="btn btn-primary pull-left">Add New Role<div class="ripple-container"></div></a>
</div>
@endsection

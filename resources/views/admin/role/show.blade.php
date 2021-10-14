@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Show Role</h4>
                </div>
                <div class="card-body">
                    <form method="" action="">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input type="text" class="form-control" name="name" value="{{$role->name}}" disabled>
                                </div>
                            </div>
                        </div>

                        <a type="submit" href="{{route('role.index')}}" class="btn btn-primary pull-left">Back</a>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

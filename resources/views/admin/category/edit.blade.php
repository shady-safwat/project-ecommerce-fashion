@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Edit Your  Category</h4>
                    <p class="card-category">Please Complete Your Category</p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('category.update',$category->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                                    @error('name')
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
                                    <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                                    @error('Slug')
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
                                    <select class="form-control" name="parent_category" aria-label="Default select example">
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                    </select>
                                    @error('status')
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
                                    <textarea name="description" class="form-control"  rows="4">{{$category->description}}</textarea>
                                    @error('description')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary pull-left">Update Category</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

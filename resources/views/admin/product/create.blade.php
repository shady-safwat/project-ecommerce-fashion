@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Create Your New Product</h4>
                    <p class="card-category">Please Complete Your New Product</p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
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
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <textarea name="description" class="form-control"  rows="4" placeholder="Description"></textarea>
                                    @error('description')
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
                                    <input type="number" class="form-control" name="price" placeholder="Price">
                                    @error('price')
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
                                    <input type="number" class="form-control" name="sale" placeholder="Sale">
                                    @error('sale')
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
                                    <select class="form-control" name="status" aria-label="Default select example">
                                        <option value="" disable selected hidden>Status</option>
                                        <option>Actived</option>
                                        <option>Deactived</option>
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
                                    <select class="form-control" name="category_id" aria-label="Default select example">
                                        <option value="" disable selected hidden>Select Your Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
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
                                    <input type="file" class="form-control" name="image" id="image" >
                                    <label for="image" style="background-color:#9124A3;color:#fff;padding:.5rem 1rem; cursor:pointer; font-size:16px;">
                                        <i class="fas fa-file-upload"></i>
                                        <span>Upload Image</span>
                                    </label>
                                    @error('image')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary pull-right">Create New Product</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

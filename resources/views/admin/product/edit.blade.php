@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Edit Your  Product</h4>
                    <p class="card-category">Please Complete Your Product</p>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
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
                                    <textarea name="description" class="form-control"  rows="4" >{{$product->description}}</textarea>
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
                                    <input type="number" class="form-control" name="price" value="{{$product->price}}">
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
                                    <input type="number" class="form-control" name="sale" value="{{$product->sale}}">
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
                                        <option  disable selected hidden>{{$product->status}}</option>
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

                            {{-- <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input type="text" class="form-control" name="address" placeholder=" Address">
                                    @error('address')
                                        <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}
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

                            <div class="col-md-7">
                                <div class="form-group bmd-form-group">
                                    <img class="img" src="{{asset('adminpanel\img')}}\{{$product->image}}" alt="product_image">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary pull-right">Update Product</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
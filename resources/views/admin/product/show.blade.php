@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">Show Your  Product</h4>
                </div>
                <div class="card-body">
                    <form method="" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input type="text" class="form-control" name="name" value="{{$product->name}}" disabled>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <textarea name="description" class="form-control"  rows="4" disabled >{{$product->description}}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input type="number" class="form-control" name="price" value="{{$product->price}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <input type="number" class="form-control" name="sale" value="{{$product->sale}}" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group bmd-form-group">
                                    <select class="form-control" name="status" aria-label="Default select example" disabled>
                                        <option  disable selected hidden>{{$product->status}}</option>
                                    </select>
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
                                    <img class="img" src="{{asset('adminpanel\img')}}\{{$product->image}}" alt="product_image">
                                </div>
                            </div>
                        </div>

                        <a type="submit" href="{{route('product.index')}}" class="btn btn-primary pull-right">Back</a>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">All Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Product image</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>price</th>
                                    <th>sale</th>
                                    <th>status</th>
                                    <th>Created-at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td><img src="{{URL::asset('adminpanel\img')}}\{{$product->image}}" width="100px" alt="product_image"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td>${{$product->price}}</td>
                                        <td>{{$product->sale}}%</td>
                                        <td>{{$product->status}}</td>
                                        <td>{{ \Carbon\Carbon::parse($product->created_at)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{route('product.show',$product->id)}}" class="btn btn-info">Show</a>
                                            <a href="{{route('product.edit',$product->id)}}" class="btn btn-waring">Edit</a>
                                            <form method="post" action="{{route('product.destroy',$product->id)}}"  style="display:inline-block">
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
    <a href="{{route('product.create')}}" class="btn btn-primary pull-left">Add New Product<div class="ripple-container"></div></a>
</div>
@endsection
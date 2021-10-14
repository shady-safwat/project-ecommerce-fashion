@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">All Categories</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Parent_category</th>
                                    <th>Description</th>
                                    <th>Created-at</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        <td>{{$category->slug}}</td>
                                        <td>
                                            @if ($category->parent)
                                            {{ $category->parent->name}}
                                            @endif
                                        </td>
                                        <td>{{$category->description}}</td>
                                        <td>{{ \Carbon\Carbon::parse($category->created_at)->diffForHumans() }}</td>
                                        <td>
                                            @if ($category->role_id == 1)
                                                <a href="{{route('category.show',$category->id)}}" class="btn btn-info">Show</a>
                                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-waring">Edit</a>
                                                <form method="post" action="{{route('product.destroy',$category->id)}}"  style="display:inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                            @endif

                                            @if($category->role_id == 2)
                                                <a href="{{route('category.show',$category->id)}}" class="btn btn-info">Show</a>
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
    <a href="{{route('category.create')}}" class="btn btn-primary pull-left">Add New Category<div class="ripple-container"></div></a>
</div>
@endsection

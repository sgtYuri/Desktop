@extends('cms.layouts.index')
@section('title', 'Products')
@section('body')
    <div class="container pt-5">
        <h1>Products</h1>
        <a href="{{ URL::route('cms.product.add') }}" class="btn btn-success">Add Product</a>
        @csrf
        <br>
        <br>

        <table class="table table-bordered">
            <tr>
                <th>Name</th> 
                <th>Category</th>
                <th>Details</th>
                <th>Price</th>
                <th>Images</th>
                <th></th>
            </tr>
           @foreach ($data as $x)
                <tr>
                    <td>{{$x->name}}</td>
                    <td>{{$x->category}}</td>
                    <td>{{$x->details}}</td>
                    <td>{{$x->price}}</td>
                        <td >
                            <img src="{{ URL::asset('storage/'.$x->image1) }}" width="15%">
                            <img src="{{ URL::asset('storage/'.$x->image2) }}" width="15%">
                            <img src="{{ URL::asset('storage/'.$x->image3) }}" width="15%">
                        </td>
                    <th>
                        <a class="btn btn-success">Update</a>
                        <a class="btn btn-danger">Delete</a>
                    </th>
                </tr>
           @endforeach
        </table>
    </div>
@endsection


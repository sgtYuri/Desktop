@extends('cms.layouts.index')
@section('title', 'Products')
@section('body')
    <div class="container pt-5">
        <center>
        <h1>Add Products</h1>
           
                <form method="post" action="{{URL::route('cms.product.create') }}" class="btn btn-secondary" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                <label class="form-label">Name</label>
                <input name="name" type="text" class="form-control"  >
                </div>
                <div class="mb-3">
                <label class="form-label">Category</label>
                <input name="category" type="text" class="form-control"  >
                </div>
                <div class="mb-3">
                <label class="form-label">Details</label>
                <input name="details" type="text" class="form-control"  >
                </div>
                <div class="mb-3">
                <label class="form-label">Price</label>
                <input name="price" type="text" class="form-control" >
                </div>
                <div class="mb-3">
                <label class="form-label">Image1</label>
                <input name="file1" type="file" class="form-control">
                </div>
                <div class="mb-3">
                <label  class="form-label">Image2</label>
                <input name=" file2" type="file" class="form-control" >
                </div>
                <div class="mb-3">
                <label class="form-label">Image3</label>
                <input name="file3" type="file" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </center>
        
    </div>
@endsection
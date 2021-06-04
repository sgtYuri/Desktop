@php $active = 'product' @endphp
@extends('layout.main')
@section('title', 'product')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                          Product
                        </h4>
                    </div>
                   
                    <div class="col-12">
                        <hr>    
                    </div>                   
                    <div class="col-12">
                            <form class="row g-3">
                                <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Name</label>
                                <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Category</label>
                                <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-4">
                                <label for="inputAddress" class="form-label">Price</label>
                                <input type="number" class="form-control" id="inputAddress" placeholder="">
                                </div>
                                <div class="col-4">
                                <label for="inputAddress2" class="form-label">Brand</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="">
                                </div>
                                <div class="col-md-4">
                                <label for="inputCity" class="form-label">Decription</label>
                                <input type="text" class="form-control" id="inputCity">
                                </div>
                                
                                <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    Check me out
                                    </label>
                                </div>
                                </div>
                                <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
@endsection
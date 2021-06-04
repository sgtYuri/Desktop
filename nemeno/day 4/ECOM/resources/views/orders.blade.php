@php $active = 'orders' @endphp
@extends('layout.main')
@section('title', 'orders')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                            Orders
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/orders/create" class="btn btn-dark pull-right">Create</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-muted" scope="col">#</th>
                                    <th class="text-muted" scope="col">Name</th>
                                    <th class="text-muted" scope="col">Description</th>
                                    <th class="text-muted" scope="col">Days</th>
                                    <th class="text-muted" scope="col">Pay</th>
                                    <th class="text-muted" scope="col">Created</th>
                                    <th class="text-muted" scope="col">Updated</th>
                                    <th class="text-muted" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                   
                                </tr> 
                                <tr>
                                    
                                </tr> 
                                <tr>
                                    
                                </tr> 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
@endsection
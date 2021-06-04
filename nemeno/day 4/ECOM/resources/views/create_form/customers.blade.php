@php $active = 'customers' @endphp
@extends('layout.main')
@section('title', 'customers')
@section('content')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                         Customers Information
                        </h4>
                    </div>
                   
                    <div class="col-12">
                        <hr>    
                    </div>                   
                    <div class="col-12">
                            <form class="row g-3">
                                <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Name</label>
                                <input type="email" class="form-control" id="inputEmail4">
                                </div>
                                <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Contact</label>
                                <input type="password" class="form-control" id="inputPassword4">
                                </div>
                                <div class="col-4">
                                <label for="inputAddress" class="form-label">Gender</label>
                                <input type="number" class="form-control" id="inputAddress" placeholder="">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword4" class="form-label">Gender</label>
                                    <select id="inputState" class="form-select">
                                       <option selected>choose....</option>
                                       <option>Male</option>
                                       <option>Female</option>
                                    </select>
                                 </div>
                                <div class="col-md-4">
                                <label for="inputCity" class="form-label">Age</label>
                                <input type="number" class="form-control" id="inputCity">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputCity" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputCity" class="form-label">Ship Status</label>
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
                                <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
@endsection
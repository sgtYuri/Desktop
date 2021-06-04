@extends('cms.layouts.index')
@section('title', 'Products')
@section('body')
    <div class="container pt-5">
        <h1>Cart Orders</h1>
        <br>

        <table class="table table-bordered">
            <tr>
                <th><center>IMAGE</center></th>
                <th><center>PRICE</center></th>
                <th><center>QTY</center></th>
                <th><center>NAME</center></th>
                <th><center>TOTAL</center></th>
                <th></th>
            </tr>
         
                <tr>
                    <td>
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgu6EPd9cM4UxKYstBs7oNycJrneq1LILy_w&usqp=CAU" width="20%">
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                        <td >
                            {{-- <img src="{{ URL::asset('storage/'.$x->image1) }}" width="15%">
                            <img src="{{ URL::asset('storage/'.$x->image2) }}" width="15%">
                            <img src="{{ URL::asset('storage/'.$x->image3) }}" width="15%"> --}}
                        </td>
                    <th>
                        <center>
                            <button type="button" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>
                            </button>
                        <center>
                    </th>
                </tr>
        </table>
        <div class="container pt-5">
            <h1>Customers Detail:</h1>
            <form>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label>Name</label>
                    <input type="text" class="form-control" >
                  </div>

                  <div class="form-group col-md-6">
                    <label >Email</label>
                    <input type="text" class="form-control"  >
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label>Address</label>
                    <input type="text" class="form-control"  >
                  </div>  
                                  
                  <div class="form-group col-md-6">
                    <label >Contact Number</label>
                    <input type="text" class="form-control">
                  </div>  
                </div>
                <br>
              </form>

                    <h4 class="mb-3">Payment Method</h4>
          
                    <div class="my-3">

                      <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="paypal">PayPal</label>
                      </div>
                      <div class="form-check">
                        <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                        <label class="form-check-label" for="paypal">Cash on Delivery</label>
                      </div>
                    </div>
          
                    

                    <hr class="my-4">
          
                    <button class="w-10 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                  </form>
                </div>
              </div>
    </div>
@endsection


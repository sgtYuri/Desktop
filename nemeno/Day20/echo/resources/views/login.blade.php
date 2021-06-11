<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>
<body class="">

    <div class="container">
        <div class="row align-items-center">
            <div class="col"></div>
            <div class="col-4 mt-5">
                <div class="card">
                    <div class="card-body text-center">
                      {{-- <img width="50%" src="https://cdn5.vectorstock.com/i/1000x1000/45/29/blue-logistics-logo-with-airplane-taking-off-vector-22854529.jpg" alt=""> --}}
                      <br>
                      <br>                    
                        Log in to your Account
                            <br>
                            <br>
                            <form  class="text-start" method="post" action="#" class ="col-4">
                                @csrf
                                 @if(session('error'))
                                <div class="mb-3">
                                    <span class="alert alert-sm alert-danger">
                                        {{session('error') }}
                                    </span>
                                </div>                              
                                @endif
                                 
                                <div class="mb-3">
                                <label class="form-label">User Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_name">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                                </div>
                             
                                <a href="{{URL::route('registration') }}"><h5>Create Account</h5></a>
                                <br>
                                <br>
                                 <div class="d-grid gap-2">
                                   <button class="btn btn-primary" type="submit">login</button>
                                 </div>
                            </form>       
                    </div>
                </div>
            </div>    
            <div class="col"></div>
        </div>
    
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>  
</body>
</html>

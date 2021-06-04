<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    
    <div class="container p-4">

        @if(session('error'))
            <p class="text-danger">
                {{ session('error') }}
            </p>
        @endif
        
        <form method="post" action="{{ URL::route('insert.signup') }}">
            <h2><a class="btn btn-primary">Create Account</a></h2>
            @csrf
            <div class="form-group">
                <label>Username</label>
                <input name="username" type="text" class="form-control" value="{{ old('username')}}"> 
            </div>

            <div class="form-group">
                <label>Password</label>
                <input name="password" type="password" class="form-control" value="{{ old('password')}}"> 
            </div>

            <div class="form-group">
                <label>Full Name</label>
                <input name="fullname" type="text" class="form-control" value="{{ old('fullname')}}"> 
            </div>

            <br>
                <button type="submit" class="btn btn-primary">Save</button>
        </form>
            <br>
                <a href="{{URL::route('login')}}" class="btn btn-success">Go back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
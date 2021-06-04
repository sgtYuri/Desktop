<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row p-5">
            <div class="col-10">
                <h1>Personnel</h1>
            </div>
            <div class="col-2">
                <a href="/create" class="btn btn-success">Add New</a>
            </div>
            <div class="col-12 mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th scope="col">First name</th>
                            <th scope="col">Last name</th>
                            <th scope="col">Middle name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Gender</th> 
                            <th scope="col">Birthday</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Address</th>
                            <th scope="col"></th> 
                        </tr>
                   
                    </thead>
                    <tbody>
                        <!--$x is the -->
                        @foreach($data as $x)
                        <tr> 
                            <th scope="row">{{$x->first_name}}</th> 
                            <th scope="row">{{$x->last_name}}</th> 
                            <th scope="row">{{$x->middle_name}}</th> 
                            <th scope="row">{{$x->age}}</th> 
                            <th scope="row">{{$x->gender}}</th> 
                            <th scope="row">{{$x->birthday}}</th> 
                            <th scope="row">{{$x->contact}}</th> 
                            <th scope="row">{{$x->address}}</th> 
                            <th scope="row">
                            <a href="{{ URL::route('update', $x->id) }}" class="btn btn-success btn-sm">Update</a> 
                            <a href="{{ URL::route('delete', $x->id) }}" class="btn btn-danger btn-sm">Delete</a>    
                            </th> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
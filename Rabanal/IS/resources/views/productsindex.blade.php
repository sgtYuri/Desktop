<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-10 mt-5">
                <h1>List of Products</h1>
            </div>
            <div class="col-2 mt-5">
                <a href="{{URL::route('add.products') }}" class="btn btn-primary">
                    CREATE
                 </a>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <tr>
                        <th >Name</th>
                        <th >Category</th>
                        <th >Price</th>
                        <th >Size</th>
                        <th >Color</th>
                        <th >Stocks</th>
                        <th >Photo</th>
                        <th ></th>
                        <th ></th>
                    </tr> 
                    @foreach ($products as $x)
                        <tr>
                            <td >{{$x->name}}</td>
                            <td >{{$x->category}}</td>
                            <td >{{$x->price}}</td>
                            <td >{{$x->size}}</td>
                            <td >{{$x->color}}</td>
                            <td >{{$x->stocks}}</td>
                            <td >{{$x->photo}}</td>
                            <td >
                                <img src="{{ URL::asset('storage/products/'.$x->photo) }}">
                            </td>
                            <td>
                                <a href="{{ URL::route('update.products', $x->id)}}" class="btn btn-success">UPDATE</a>
                                <a href="{{ URL::route('delete.products', $x->id)}}"class="btn btn-danger">DELETE</a>
                            </td>
                        </tr> 
                    @endforeach
                    
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
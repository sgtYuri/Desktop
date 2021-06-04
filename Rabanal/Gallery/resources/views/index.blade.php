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
                <h1>Photo Gallery</h1>
            </div>
            <div class="col-2 mt-5">
                    <a href="{{URL::route('create') }}" class="btn btn-primary">
                       Upload Photo
                    </a>
            </div>
            <div class="col-12">
                <table class="table table-bordered">
                    <tr>
                        <th><center>FILENAME</center></th>
                        <th><center>PHOTO</center></th>
                        <th><center>ACTION</center></th>
                    </tr> 
                    @foreach ($gallery as $x)
                        <tr>
                            <td >{{$x->photo}}</td>
                            <td >
                                <center><img src="{{ URL::asset('storage/products/'.$x->photo) }}"></center>
                            </td>
                            <td>
                                <center><a href="{{ URL::route('delete', $x->id)}}"class="btn btn-danger">DELETE</a></center>
                            </td>
                        </tr> 
                    @endforeach
                    
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
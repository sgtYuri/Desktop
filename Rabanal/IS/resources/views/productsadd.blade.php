<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
        {{-- <button class="btn btn-success btn-sm">
            This is create Sample
        </button> --}}
        
        <form method="post" action="{{ URL::route('save.products')}}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-10 mt-5">
                        <h1>Add Products</h1>
                    </div>
            <div class="col-12">
                <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" required>
                </div>

                <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" class="form-control" name="category"  required>
                </div>

                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="text" class="form-control" name="price"  required>
                </div>

                <div class="mb-3">
                <label class="form-label">Size</label>
                    <select class="form-select" name="size" required>
                        <option>Small</option>
                        <option>Medium</option>
                        <option>Large</option>
                    </select>
                </div>

                <div class="mb-3">
                <label class="form-label">Color</label>
                <input type="text" class="form-control" name="color"  required>
                </div>

                <div class="mb-3">
                <label class="form-label">Stocks</label>
                <input type="text" class="form-control" name="stocks"  required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input type="file" class="form-control" name="photos"  >
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>

         
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
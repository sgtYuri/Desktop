<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="container">
<br><br>
<h1>Magdagdag</h1><br>

<form action="{{ URL::route('product.add.save')}}" method="post" enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <label class="form-label">Upload Image</label>
    <input type="file" class="form-control"
        accept="image/x-png,image/gif,image/jpeg" name="file">
</div>    
<div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
</div>    


<div class="mb-3">
    <label class="form-label">Price</label>
    <input type="number" class="form-control" name="price">
</div>    
<button type="submit" class="btn btn-primary">isumite</button>
</form>


</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>    
</body>
</html>
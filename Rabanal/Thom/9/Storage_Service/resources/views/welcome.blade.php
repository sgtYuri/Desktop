<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="cotainer">
    <div class="row">
        <div class="col-8 mt-4">
                    <h1>Itaks</h1>
            </div>
                <div class="row">
                    <div class="col-4 mt-4">
                            <a href="{{ URL::route('product.add')}}" class="btn btn-success pull-right">Addo to Karuto</a>
                    </div>
                    
                    </div class="row">
                        @foreach($products as $x)
                        <div class="col-4 mt-4">
                        <div class="card" style="width: 18rem;">
                        <img src="{{ URL::asset('storage/products/'.$x->photo)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">{{ $x->name }}</h5>
                        <p class="card-text">Abay ho!!! ay matabas ka nga ng ganireng klaseng itak ay mahihimay ang pagkakatalop ng iyong balat sa buto.</p>
                        <a href="#" class="btn btn-primary">abay pabiley!</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
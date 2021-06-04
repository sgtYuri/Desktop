<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Floating labels example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/floating-labels/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin" method="post" action="{{ URL::route('login.verify') }}" >
      @csrf

      <div class="text-center mb-4">
        <img class="mb-4" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVEAAACWCAMAAABQMkvIAAAAY1BMVEUAAACEWD2HWj6LXUAlGRJlRC+CVz13TzcaEAsHBQMfFQ5zTTWGWj6IWj9+VDpsSDJfPywbEg1ELh8TDAlQNSUrHRQ+KR1WOig3JRpKMSJHMCFbPSoqHBQeFA6RYUNpRjEyIhes+oHXAAAEx0lEQVR4nO3Z3XaqPBAGYDKjRkoCWPyrVvH+r/KbAC35Ade3194HynqfHqhJpO0YMpOYZQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwyvI8/799eaDpmp5d6nfo7C9odtv5zje1Y7WZ7VSm8l9ulIdPEhC19rqvRLdsavymLKvTR3L1c1Vay6rY/91/8Gq2TyJ6YT77rxWNuJaG0q6D7iJ8/zha3slFGNODZjLSbpS1i4rps4hqCru0x4WysHwdez+ZP7OZ8YpJZrUfuD1Lg9FVsZEujj6Kt/Ykot9sZSI2s2+9MmnvpSaVz45eyZKgeJzRV1a2PHZPDxUrKpeznD6J6Jp4lW2rmV6Zk0p5AVwxScCK7dzwprDjLL2wH165UrxgvLEnESUlU3B/n5k9BwnKwXst8ZeXLl/NqawaUteOlJv+v45yra8/+atf2XxE95Yv7l6ejlGjTBgEUmWWfbF/saLQQfLfqCGTtWT89SLLTlaZpdz38xEtFUlJqVygJmgiP89LLF3Grg0fxzZFHOR3d3e7x49oemddsJeS8Gcj+mDjQlZTWEENWqJwlkk6z1116y+Iks3DikkaXMBlRoZvdjeEiZve1WxEK+LvrEs4E7lpz0YFd+mBqXWPheLxRk8i2lK3fGrieELKysrzVcVbmYtoQ8PtLpNvF3eepfYJb9vW8MM9HpnGlJNEdG/dFM61LlfxJQtdPv70b39NcxE90bCwXZiuUZ+bUJegpSEzXEWZ8XJJRI9splflJZmLaGl4uK1tMqBUXIctMvmGkqC2484piejj2SHCUsxEVGZTOzyVQvMY9BU2qccl/sMquOIx62COeqoxxUutEwRQNpAmGn32UnzRZzRnYh11l8qN4eQkSj6TS9z2nqYjerNuMh3ataiVsl4ikaKS47xSddO47kYX43YozfWmK2IletGZStaY9KpvajqiV3LrYsX9UZy/ZXSbzzgcu26pffBwcqdoWIGTiJbKun1WbZOK7HM5K+x0RI2yUjLpoqNpvM3d5rOOR5/IlQOnYfimD1uWRlSKrq4Sc59KVHxqssll39Tubm3SeAy2Pi63/6xxsvlMT4lkEnuR29uf9BNHVKthburoywF3VGLTQ/73lK9u6b+iVZDeT/STv1trNsmJxjFMXY392bVHEa2l49E9O0dnTbKKhqcES/MRrQSyf+rTxn4iK3XZPVhZZc/fV15hRKVG+F0w1tbfI+zcd1H/5k9/UTVF26SqP2hyU+uYjJaVWAUNUsdz90R5y+WxlBt7PAzREtJ26JRlwtiFJHrRVOtILrukKEe7fbyUVNR9Abprx7Htl4t/nFRK0+9glTL92FZblvLIXzs1K2Jdn05SeSlSywlotr0bCrlKJtkTuePLs+2+ySj9b0TbbiZG8ZBCvstNcjP3w4z88CYsuq6W+m6p96ulnDY727vlUFbyPa44T8yb7Hx3k0wHg9vs687xyWbDfHc7LhoGWbJllSwXu2vZ/WrVHuKut5Z/ryLS8j0x6jtr3H/eHILBt+y2WiWnfR992++o3czR5+1xPq+WND8BAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgpfwHeCksW8WNmNMAAAAASUVORK5CYII=" alt="" width="150" height="150">
        <h1 class="h3 mb-3 font-weight-normal">Log in Lazado</h1>
      </div>

      @if(session('error'))
      <p class="text-danger">{{ session('error')}}</p>
      @endif
    <div class="container">
      <div class="form-label-group">
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
      </div>

      <div class="form-label-group">
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
     <a href="{{URL::route('signup') }}">create Account</a> <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
      

    </form>
  </div>
    <style>
        body{
            background-image: url('https://lh3.googleusercontent.com/proxy/5_b4tGzGepJ3AJ7XYbKSJ_tgfgDrvgsnl1hpSG4TFKfodKsIv236NhoaUAbykD4NjNmnXRzkNptSinbsG1mam38v3uqZdlT0qVvqrDXprFcZ_64XWaA5yOUN-RMpQA_d9ICPjOfxOAsQ3Q');
        background-repeat:no-repeat;
        background-size: cover;
        }
        .btn-primary{
          background: #f6a400;
          border:none;
        }
      </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
  </body>
</html>
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
        
        <form method="post" action="{{ URL::route('save')}}">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-10 mt-5">
                        <h1>Create Personnel</h1>
                    </div>
            <div class="col-12">
                <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" required>
                </div>

                <div class="mb-3">
                <label class="form-label">last Name</label>
                <input type="text" class="form-control" name="lastname"  required>
                </div>

                <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="text" class="form-control" name="age"  required>
                </div>

                <div class="mb-3">
                <label class="form-label">Gender</label>
                    <select class="form-select" name="gender" required>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>

                <div class="mb-3">
                <label class="form-label">Birthday</label>
                <input type="date" class="form-control" name="Birthday"  required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>

         
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
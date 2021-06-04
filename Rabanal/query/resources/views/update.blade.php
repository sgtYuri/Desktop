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
        
        <form method="post" action="{{ URL::route('update.save', $analytics->id)}}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="row">
                    <div class="col-10 mt-5">
                        <h1>Add Personnel</h1>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rank</label>
                        <input type="text" class="form-control" name="rank" value="{{ $analytics->rank }}" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstname" value="{{ $analytics->firstname }}" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="middlename" value="{{ $analytics->middlename }}" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">last Name</label>
                        <input type="text" class="form-control" name="lastname" value="{{ $analytics->lastname }}" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Serial Number</label>
                        <input type="text" class="form-control" name="serialnumber" value="{{ $analytics->serialnumber }}" >
                    </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>

         
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
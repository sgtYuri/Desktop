<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Personel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row p-5">
            <div class="col-10">
                <h1>Create Personels</h1>
            </div>
            <div class="col-2">
                <a href="/" class="btn btn-danger">Cancel</a>
            </div>
            <div class="col-12 mt-5">
                <form action="{{ URL::route('update.save', $data->id) }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{ $data->first_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{ $data->last_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" name="middle_name" value="{{ $data->middle_name}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" class="form-control" name="age" value="{{ $data->age}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contact</label>
                        <input type="number" class="form-control" name="contact" value="{{ $data->contact}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Birthday</label>
                        <input type="date" class="form-control" name="birthday" value="{{ $data->birthday}}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gender</label>
                        <select class="form-control" name="gender" value="{{ $data->gender}}" required>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" name="address" rows="3" required>{{$data->address}}</textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
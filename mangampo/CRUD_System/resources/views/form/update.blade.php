<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <h1><center>Update Personnel</center></h1>
    @if($errors->any())
    @foreach($errors->all() as $e)
<p style="text-align:center; width:100%; color:red">
    {{$e}}
</p>
    @endforeach
    @endif
    
    <form method="post" action="{{ URL::route('crud.update.save', $data->id)}}">
        @csrf
        <div>
    <label>Username</label>
        <div>
        <label>First Name</label>
        <input type="text" name="first_name" value="{{ $data->first_name }}">
        </div>

        <div>
            <label>Last Name</label>
            <input type="text" name="last_name" value="{{ $data->last_name }}">
            </div>

            <div>
                <label>Middle Name</label>
                <input type="text" name="middle_name" value="{{ $data->middle_name }}">
                </div>

                <div>
                    <label>Age</label>
                    <input type="text" name="age" value="{{ $data->age }}">
                    </div>

                    <div>
                        <label>Birthday</label>
                        <input type="date" name="birthday" value="{{ $data->birthday }}">
                        </div>

                        <div>
                            <label>Rating</label>
                            <input type="text" name="rating" value="{{ $data->rating }}">
                            </div>

       
        <div> 
            <button class="success">Update</button> 
        </div>
    </form>
    <style>
        </style>
   </div>
</form>
</body>
</html>
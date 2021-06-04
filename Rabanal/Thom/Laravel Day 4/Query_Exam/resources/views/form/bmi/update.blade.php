<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <h1><center>Update BMI</center></h1>
    @if($errors->any())
    @foreach($errors->all() as $e)
<p style="text-align:center; width:100%; color:red">
    {{$e}}
</p>
    @endforeach
    @endif
    
    <form method="post" action="{{ URL::route('form.bmi.update', $data->id) }}">
        @csrf
        <div>
    <label>Update BMI</label>
       

        <div>
            <label>Height (cm)</label>
            <input type="text" name="height" value= "{{$data->height}}">
            </div>

            <div>
                <label>Weight (kg)</label>
                <input type="text" name="weight" value= "{{$data->weight}}">
                </div>

       
        <div> 
            <button class="success">UPDATE</button> 
        </div>
    </form>
    <style>
        </style>
   </div>
</form>
</body>
</html>
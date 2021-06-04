<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
    <h1><center>Create BMI</center></h1>
    @if($errors->any())
    @foreach($errors->all() as $e)
<p style="text-align:center; width:100%; color:red">
    {{$e}}
</p>
    @endforeach
    @endif
    
    <form method="post" action="{{ URL::route('crud.contacts.create', $id) }}">
        @csrf
        <div>
    <label>Create Contacts</label>
       

        <div>
            <label>Height</label>
            <input type="text" name="height">
            </div>

            <div>
                <label>Weight</label>
                <input type="text" name="weight">
                </div>

       
        <div> 
            <button class="success">CREATE</button> 
        </div>
    </form>
    <style>
        </style>
   </div>
</form>
</body>
</html>
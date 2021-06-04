<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
   <h1><center>Personnel List</center></h1>
    @if(session('success'))
    <kbd>
        {{ session('success') }}
    </kbd>
    @endif
    @if(@$trash)
    <a href="{{ URL::route('index') }}">
   <button class="success">Go Back</button>
   </a>
@else
<a href="{{ URL::route('crud.create') }}">
    <button class="success">CREATE</button>
    </a>

   <a href="{{ URL::route('crud.trash') }}">
    <button class="success">View Trash</button>
    </a>
   @endif
    <hr>
    <table cellspacing="0">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Middle name</th>
                <th>Age</th>
                <th>Birhtday</th>
                <th>Rating</th>
                <th>BMI</th>
                <th></th>
            </tr>
        </thead>
    <tbody>
        @foreach($personnel as $x)
            <tr>
                <td>{{  $x->first_name }}</td>
                <td>{{  $x->last_name }}</td>
                <td>{{  $x->middle_name }}</td>
                <td>{{  $x->age }}</td>
                <td>{{  $x->birthday }}</td>
                <td>{{  $x->rating }}</td> 
                <td>{{  $x->bmi ?? 'Not Set' }}</td>
                <td>
                    @if(@$trash) 
                    <a href="{{ URL::route('crud.force.delete',$x->id) }}">
                        <button class="success">Force Delete</button>
                        </a>
                    
                    <a href="{{ URL::route('crud.restore',$x->id) }}">
                        <button class="success">Restore</button>
                        </a>
                        @else
                    <a href="{{ URL::route('crud.bmi', $x->id) }}">
                    <button class="Success">SET BMI</button>
                    </a>

                    <a href="{{ URL::route('crud.delete', $x->id) }}">
                    <button class="danger">DELETE</button>
                    </a>
                    
                    <a href="{{ URL::route('crud.update', $x->id) }}">
                    <button class="default">UPDATE</button>
                    @endif
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
   
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="{{ URL::asset('css/style.css')}}" rel="stylesheet">
</head>
<body>

   <h1><center>Contacts</center></h1>

    @if(session('success'))
    <kbd>
        {{ session('success') }}
    </kbd>
    @endif
    

    <table cellspacing="0">
        <thead>
            <tr>
                <th>CONTACT</th>
            </tr>
        </thead>
    <tbody>
        @foreach($contacts as $x)
            <tr>
                <td>{{  $x->contact }}</td>
            </tr>
         @endforeach          
    </tbody>
    </table>
   
</body>
</html>
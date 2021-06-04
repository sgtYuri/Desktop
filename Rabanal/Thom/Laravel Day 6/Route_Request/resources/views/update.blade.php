<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body> 
    <a href="{{ URL::route('crud_form')}}" class="btn btn-success">Create Reminder</a>
    
    @if(session('success'))
    <div class="mb-3">
        <div class="badge bg-success">
            {{ session('success')}}
        </div>
    </div>
    @endif

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">priority</th>
            <th scope="col">status</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($reminder as $x)
          <tr>
            <th scope="row">{{ $x->id }}</th>
            <td>{{ $x->title }}</td>
            <td>{{ $x->description }}</td>
            <td>{{ $x->priority }}</td>
            <td>{{ $x->status }}</td>
            <td>{{ $x->action }}</td>
          </tr>|
          <td>
            <a href="{{ URL::route('update_form', $x->id)}}" class="btn btn-sm btn-success">UPDATE</a>
            <a href="" class="btn btn-sm btn-success">DELETE</a>
          </td>
          @endforeach
        </tbody>
      </table>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
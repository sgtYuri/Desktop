<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

  @if($errors->any())
        @foreach($errors->all() as $x)
        <div class="text-danger">
            {{ $x }}
        </div><br>
        @endforeach
        @endif
    <form action="{{ URL::route('crud_form') }}" method="post">
@csrf
        
        <div class="mb-3">
          <label for="title" class="form-label">title</label>
          <input type="text" class="form-text" name="title">
        </div>
        
        <div class="mb-3">
          <label for="description" class="form-label">description</label>
          
          <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea" rows="5"></textarea>
          <label for="floatingTextarea">description</label>
        </div>

        <div class="mb-3">
          <label for="due_date" class="form-label">due date</label>
          <input type="date" class="form-text" name="due_date">
        </div>

        <div class="mb-3">
          <label for="status" class="form-label">Priority</label>
        <select class="form-select" name="priority" aria-label="Default select example">
          <option selected>select</option>
          <option value="1">high</option>
          <option value="2">medium</option>
          <option value="3">low</option>
        </select>
      </div>

        <div class="mb-3">
          <label for="status" class="form-label">status</label>
          
          <select class="form-select" name="status" aria-label="Default select example">
            <option selected>Pending</option>
            <option value="1">Doing</option>
            <option value="2">Done</option>
            <option value="3">Cancelled</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
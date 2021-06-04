@extends('layouts.main')
@section('content')
<div class="container-fluid">
    Department Page
</div>
@endsection
@section('extraJs')
    <script>
        $(document).ready(function(){
            alert('test');
        });
        </script>
@endsection
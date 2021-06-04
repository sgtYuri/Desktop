<?php
    $name = "Thom";
    $age =18;
    $company ="army";
    $persons = [1, 2, 3];
?>

<br>
<br>

Hello {{ $name }} <br>
Hello <?php echo $name; ?>

<br>
<br>

Time now is {{ time() }}

<br>

@if($age >=19)
    You can have alcohol
@else
     YOU CAN'T
@endif

<br>

@isset($company)
there is company {{ $company }}
@endisset

<br>

@empty($persons)
    NO person here
@endempty

<br>

@foreach($persons as $x)
<span>I'm number {{ $x }}</span>
<br>
@endforeach

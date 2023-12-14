<?php

$x = 5;
$color = ['red', 'pink'];
// $color = [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to laravel</h1>
    <p>{{ $x }}</p>

    @if ($x < 5)
        {{ 'yes' }}
    @else
        {{ 'no' }}
    @endif

    @if ($x == 5)
        {{ 'asdasd' }}
    @endif
    <br>


    @foreach ($color as $item)
        <p>{{ $loop->iteration }} {{ $item }}</p>
    @endforeach


    @forelse ($color as $item)
        {{ $item }}

    @empty
        <p>No data found</p>
    @endforelse

    @include('test')

</body>

</html>

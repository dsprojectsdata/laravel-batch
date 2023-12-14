@extends('layout')

@section('title', 'Home')

@section('content')
    <p>Home Page</p>

    @php

    // print_r(session()->get('userId'));

    //    print_r(url('/home'));
    //    echo "<br>"; 
    //    print_r(route('save')); 
    @endphp

<br>
<br>

    <form action="{{route('save')}}" method="post">
        
        @csrf

        <input type="text" name="email" placeholder="Email" value="abc@gmail.com">
        <br>
        <br>
        <input type="text" name="password" placeholder="Password" value="123456"> 
        <br>
        <br>
        <button type="submit"> Submit</button>
    </form>

@endsection

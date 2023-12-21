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


    @foreach ($product as $item)
        <p>{{ $item->name }}</p>
    @endforeach

    <br>
    <br>


    @foreach ($errors->all() as $item)
        <p>{{ $item }}</p>
    @endforeach

    <form action="{{ route('save') }}" method="post">

        @csrf

        <label for="name"></label>
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label for="Email"></label>
        <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <label for="Password"></label>

        <input type="text" name="password" placeholder="Password" value="">
        @error('password')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <input type="text" name="password_confirmation" placeholder="confirm Password" value="">
        @error('password_confirmation')
            <p>{{ $message }}</p>
        @enderror
        <br>
        <br>
        <button type="submit"> Submit</button>
    </form>

@endsection



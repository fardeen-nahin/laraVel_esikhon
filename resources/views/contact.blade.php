@extends('layout.master')
@section('title','Contact Page')

@section('content')
<h1>This is Contact.</h1>

<form action="">
    <input type="text">
    <br>
    <input type="submit" value="Subscribe">
</form>

@endsection

@section('style')
    <style>
        body{
            background-color: aqua
        }
    </style>
@endsection
    
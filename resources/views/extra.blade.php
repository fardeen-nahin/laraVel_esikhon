@extends('layout.master')
@section('content')
    <h1> Extra page </h1>
@endsection

@section('extraField')
    @parent
    <p>This is the New</p>
@endsection 
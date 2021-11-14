@extends('layout.master')
@section('content')
    <h1> Extra page </h1>


    @component('components.alert')
        <span>Something Error</span>
    @endcomponent

@endsection

@section('extraField')
    @parent
    <p>This is the New</p>
@endsection 
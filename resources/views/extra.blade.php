@extends('layout.master')
@section('content')
    <h1> Extra page </h1>


    @component('components.alert')
    @slot('title')
        This is a Title
    @endslot
        <h1>Something Error</h1>
    @endcomponent

@endsection

@section('extraField')
    @parent
    <p>This is the New</p>
@endsection 
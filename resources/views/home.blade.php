@extends('layouts.app')

@section('content')
    <h1> This is home page </h1>
@endsection

@section('sidebar')
    @parent
    <p> this is child </p>
    
@endsection
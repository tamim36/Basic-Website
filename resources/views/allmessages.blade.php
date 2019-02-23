@extends('layouts.app')

@section('content')
    <h1> All Messages </h1>
    @if(count($messages) > 0)
        @foreach ($messages as $item)
            <ul class="list-group">
            <li class="list-group-item list-group-item-success">Name : {{$item->name}}</li>
            <li class="list-group-item list-group-item-info">Email : {{$item->email}}</li>
            <li class="list-group-item list-group-item-warning">Message : {{$item->message}}</li>
            <li class="list-group-item"></li>
            </ul>
        @endforeach
    @endif
    
@endsection


@section('sidebar')
    @parent
    <p> this is child </p>
    
@endsection
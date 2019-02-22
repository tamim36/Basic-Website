@extends('layouts.app')

@section('content')
    <h1> This is home page </h1>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore nemo iure explicabo nulla consectetur ipsum, accusamus et a ab, temporibus facere quas necessitatibus maxime veniam provident eius, modi tempora perspiciatis.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro inventore ex iusto magni veniam, eveniet nemo fuga, ipsum, ipsa maxime obcaecati. Eum ipsa consequuntur enim porro reprehenderit eveniet iure ea?
    </p>
@endsection

@section('sidebar')
    @parent
    <p> this is child </p>
    
@endsection
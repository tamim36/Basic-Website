@if(count($errors) > 0)
    @foreach ($errors->all() as $item)
        <div class="alert alert-danger">
            {{$item}}
        </div>
    @endforeach
@endif

@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif
@extends('layouts.app')

@section('content')
<h1>Todos</h1>
@include('inc.messages')

@if(count($todos) > 0)
    @foreach ($todos as $todo) 
     <div class="card p-3 mb-2">
     <h3><a href="todo/{{$todo->id}}">{{$todo->title}} </a> </h3>
    
        <p class="label">{{$todo->body}} <span class="badge badge-danger">{{$todo->due}}</span></p>
     </div>

    @endforeach
@endif
@endsection


@extends('layouts.app')
@include('inc.messages')
@section('content')
<a href="/" class="btn btn-success mb-4"> Go back</a>
<div class="card p-3 mb-2">
<h1>{{$todo->title}}</h1>
<p>{{$todo->body}} <span class="badge badge-danger">{{$todo->due}}</span></p>
<br>

</div>
<div class="container d-flex">
<a href="/todo/{{$todo->id}}/edit" class="btn btn-success"> Edit</a>
{!! Form::open(['action' => ['TodosController@destroy', $todo->id ], 'method'=> 'post']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
  
    {{ Form::bsSubmit('delete', ['class'=> 'btn btn-danger ml-3']) }}
{!! Form::close() !!}
</div>
@endsection
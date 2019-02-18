@extends('layouts.app')

@section('content')
<h1>Edit todo</h1>
<a href="/todo/{{$todo->id}}" class="btn btn-success"> Back</a>
<br>
{!! Form::open(['action' => ['TodosController@update', $todo->id], 'method'=> 'post']) !!}
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::bsText('title', $todo->title) }}
    {{ Form::bsTextArea('body', $todo->body) }}
    {{ Form::bsText('due', $todo->due) }}
    {{ Form::bsSubmit('submit', ['class'=> 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection
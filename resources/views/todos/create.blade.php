@extends('layouts.app')

@section('content')

{!! Form::open(['url' => 'todo', 'method'=> 'post']) !!}
   
    {{ Form::bsText('title') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('submit', ['class'=> 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection
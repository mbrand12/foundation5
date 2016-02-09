@extends('layouts/app')
@section('content')
<div class="container">
  <h1> Write a New Article </h1>
  @include('shared/_errors')

  {!! Form::open(['url' => 'articles']) !!}
    @include('articles/_form', ['buttonName' => 'Submit Article'] )

  {!! Form::close() !!}
</div>
@stop

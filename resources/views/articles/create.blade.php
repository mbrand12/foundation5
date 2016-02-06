@extends('layouts/app')
@section('content')
  <h1> Write a New Article </h1>

  @if ($errors->any())
    <ul class="alert alert-danger">
      @foreach ($errors->all() as $error)
        <li> {{ $error }} </li>
      @endforeach
    </ul>
  @endif

  {!! Form::open(['url' => 'articles']) !!}

  <div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
  </div>
  <div class="form-group">
    {!! Form::label('published_at', 'Publish On:') !!}
    {!! Form::date('published_at', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::submit('Add Article', ['class' => 'btn btn-primary form-control']) !!}
  </div>

  {!! Form::close() !!}

@stop

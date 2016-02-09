@extends('layouts/app')
@section('content')
<div class="container">
  <h1> Edit Article </h1>
  @include('shared/_errors')

  {!! Form::model($article,
    [ 'method' => 'PATCH',
      'action' => ['ArticlesController@update', $article->id]
    ])
  !!}
    @include('articles/_form', ['buttonName' => 'Edit Article'])
  {!! Form::close() !!}
</div<
@stop

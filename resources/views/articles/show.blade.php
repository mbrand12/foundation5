@extends('layouts/app')
@section('content')
<div class="container">
  <hi>Articles</h1>
    <article>
      <h2>
        {{ $article->title }}
      </h2>
      <div class="body">
        {{ $article->body }}
      </div>
    </article>
    @unless ($article->tags->isEmpty())
      <h5> Tags </h5>
      <ul>
        @foreach ($article->tags as $tag)
          <li>{{ $tag->name }}</li>
        @endforeach
      </ul>
    @endunless
</div>
@stop

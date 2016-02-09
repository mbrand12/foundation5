@extends('layouts/app')
@section('content')
<div class="container">
   <hi>Articles</h1>
   @foreach($articles as $article)
     <article>
     <h2>
     <a href="{{ url('/articles', $article->id) }}"> {{ $article->title }} </a>
     </h2>
     </article>
   @endforeach
</div>
@stop

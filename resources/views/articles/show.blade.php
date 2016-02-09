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
</div>
@stop

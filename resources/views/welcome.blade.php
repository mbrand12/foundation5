@extends('layouts/app')
@section('content')

  @unless (empty($ppl))
    <p> Hi ruby :) </p>
  @endunless

  @foreach ($ppl as $person)
    <li> {{ $person }} </li>
  @endforeach

@stop

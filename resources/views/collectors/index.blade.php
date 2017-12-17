@extends('layouts.default')
@section('title', '所有采集人')

@section('content')
<div class="col-md-offset-2 col-md-8">
  <h1>所有采集人</h1>
  <ul class="users">
    @foreach ($collectors as $collector)
        @include('collectors._collector')
    @endforeach

    {!! $collectors->render() !!}
  </ul>
</div>
@stop

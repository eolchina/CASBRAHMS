@extends('layouts.default')
@section('content')

<div class="jumbotron">
<h1>Hello CASBRAHMS</h1>
<p class="lead">
  你现在所看到的是 <a href="https://fsdhub.com/books/laravel-essential-training-5.1">以Laravel为基础构建的CASBRAHMS 项目</a> 的示例项目主页。
</p>
<p>
  一切，将从这里开始。
</p>
<p>
  <a class="btn btn-lg btn-success" href="{{ route('signup')}}" role="button">现在注册</a>
</p>
</div>
@stop
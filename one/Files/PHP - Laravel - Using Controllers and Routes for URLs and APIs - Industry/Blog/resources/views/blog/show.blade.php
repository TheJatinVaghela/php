@extends('blog.layout')
@section('content')


<div class="card">
  <div class="card-header">blog Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $blog->name }}</h5>
        <p class="card-text">details : {{ $blog->blog }}</p>
  </div>

    </hr>

  </div>
</div>

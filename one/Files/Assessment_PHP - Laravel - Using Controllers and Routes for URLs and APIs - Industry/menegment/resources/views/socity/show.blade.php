@extends('socity.layout')
@section('content')


<div class="card">
  <div class="card-header">Member Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $member->name }}</h5>
        <p class="card-text">Address : {{ $member->address }}</p>
        <p class="card-text">Mobile : {{ $member->mobile }}</p>
  </div>

    </hr>

  </div>
</div>

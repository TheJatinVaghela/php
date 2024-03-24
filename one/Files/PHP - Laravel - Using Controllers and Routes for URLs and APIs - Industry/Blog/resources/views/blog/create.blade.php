@extends('blog.layout')
@section('content')

<div class="card">
  <div class="card-header">Students Page</div>
  <div class="card-body">

      <form action="{{ route('blog.store') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>details</label></br>
        <input type="text" name="details" id="details" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

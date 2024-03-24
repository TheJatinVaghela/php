@extends('blog.layout')
@section('content')

<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('blog/' .$blog->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$blog->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$blog->name}}" class="form-control"></br>
        <label>details</label></br>
        <input type="text" name="details" id="details" value="{{$blog->details}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop

@extends('layout')

@section('content')
<h1>Edit Restaurant</h1>
<form method="post" action="/edit">
<div class="form-group">
@csrf
  <input type="hidden" value="{{$data->id}}" name="id">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" value="{{$data->name}}" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address" value="{{$data->address}}" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" value="{{$data->email}}" >
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
@stop

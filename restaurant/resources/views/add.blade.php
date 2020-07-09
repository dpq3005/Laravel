@extends('layout')

@section('content')
<h1>Add Restaurant</h1>
<form method="post" action="/add">
<div class="form-group">
@csrf
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" class="form-control" name="address" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@stop

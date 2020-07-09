@extends('layout')

@section('content')
<h1>Register new User</h1>
<form method="post" action="/register">
<div class="form-group">
@csrf
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name="name" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control" name="password" >
  </div>

  <button type="submit" class="btn btn-primary">Register</button>
</form>
@stop

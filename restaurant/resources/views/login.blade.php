@extends('layout')

@section('content')
<h1>Login</h1>
<form method="post" action="/login">
<div class="form-group">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" name="email" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control" name="password" >
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>
@stop

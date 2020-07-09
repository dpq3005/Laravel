@extends('layout')

@section('content')
<h1>Restaurant list page</h1>
@if(Session::get('status'))
<div class="alert alert-danger" role="alert">
  {{Session::get('status')}}
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

@foreach($data as $item)

    <tr>
      <th scope="row">{{$item->id}}</th>
      <td scope="row">{{$item->name}}</td>
      <td scope="row">{{$item->address}}</td>
      <td scope="row">{{$item->email}}</td>
      <td scope="row"><a href="/delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
      <td scope="row"><a href="/edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td>
    </tr>
@endforeach

  </tbody>
</table>
@stop

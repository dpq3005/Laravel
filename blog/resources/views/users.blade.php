<h1>User List</h1>

<table>
@foreach($data as $item)
<tr>
<td>{{$item->name}}</td>
<td>{{$item->address}}</td>
<td>{{$item->phone}}</td>

</tr>
@endforeach
</table>
{{$data->links()}}

<style>
td{
  background-color:salmon;
  color:white;
}
li{
  list-style:none;
  display:inline;
}
</style>

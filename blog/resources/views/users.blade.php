@include('form');
<h1>User View</h1>
@for($i=0; $i<10; $i++)
<h1>Current value : {{$i}}</h1>
@endfor
<x-profile/>

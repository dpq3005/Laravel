<h1>Form Validation</h1>
<form action="usercontroller" method="post">
<input type="text" name="address" placeholder="address">
<br>
@error('address')
<span style="color:red;">{{$message}}</span>
@enderror
<br>
<input type="text" name="email" placeholder="email">
<br>
<br>
@error('email')
<span style="color:red;">{{$message}}</span>
@enderror
{{@csrf_field()}}
<button type="submit">Submit</button>
</form>
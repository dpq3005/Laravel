<h1>User Account</h1>
<form action="usercontroller" method="get">
<br>
<input type="text" name="email">
{{@csrf_field()}}
<br>
<input type="text" name="password">
<br>
<button type="submit">Submit</button>
</form>
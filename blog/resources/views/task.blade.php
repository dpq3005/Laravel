<h2>{{session('status')}}</h2>

<form action="task" method="post">
@csrf
<input type="text" name="task">
<button type="submit">Submit Task</button>
</form>
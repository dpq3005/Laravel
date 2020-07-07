<html>
<head>
<title> @yield('title') - page</title>
</head>
<style>
.header{
  color:salmon;
}
.content{
  color:white;
  background-color:salmon;
  padding:20;
}
</style>
<body>
  <div class="header">
  @section('header')
  <h1>Header is common</h1>
  @show
  </div>
  <div class="content">
  @section('content')
  @show
  </div>
</body>
</html>
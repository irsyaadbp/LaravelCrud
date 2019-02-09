<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD by Irsyaad</title>
    <link href="{{ asset('/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>
<body>
  
<div class="container">
    @yield('content')
</div>
<div class="text-center mt-5 mb-5">
	<button type="button" class="btn btn-primary">
	  You can get source code on <a href="https://github.com/masirsyaad/LaravelCrud" class="badge badge-light" target="_blank">https://github.com/masirsyaad/LaravelCrud</a>
	</button>
</div>
</body>
</html>
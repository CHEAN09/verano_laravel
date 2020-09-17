<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Demo</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class=container>
    <div class="modal-body">
        <div class="container-fluid">
    <h1>Laravel</h1><br>
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
Home<a class="nav-link" href="{{url('/profile')}}">Profile</a><a href="{{url('/aboutme')}}"> About Me</a>
    </nav>
        </div>
    </div>
    </div>
</body>
</html>
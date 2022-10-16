<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a href="" class="navbar-brand">Company</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="{{route('signin')}}" class="nav-link text-white">SignUp</a></li>
                <li class="nav-item"><a href="{{route('login')}}" class="nav-link text-white">Login</a></li>
                
            </ul>

        </div>
    </nav>
    @section('content')
     @show    
</body>
</html>
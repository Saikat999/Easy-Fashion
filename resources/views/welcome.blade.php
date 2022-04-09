<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <! -- Styles -->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">

    <title>Easy Fashion</title>
</head>
<body>
    <div class="homepage">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand font-weight-bold" href="/">Easy Fashion</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Register</a>
                            </li>
                        </ul>
                        
                    </div>
            </nav>
           
           <div class="banner-section">

             @yield('content')
           </div>
          

            <div class="footer">
              <p class="text-center">@ Easy Fashon 2022. Developed by Saikat</p>
            </div>
        </div>

    </div>
            


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
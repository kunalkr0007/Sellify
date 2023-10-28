<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sellify</title>
    
    <link rel="icon" href="{{asset('images/logo/logo.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <style>
        .required:after {
            content: " *";
            color: red;
        }
    </style>

    <script src="../assets/js/color-modes.js"></script>

    <x-style />

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
           
            <a class=" navbar-brand" href="/">  <img width="35" height="35" src="{{asset('images/logo/logo.png')}}"/> Sellify</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categories
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/category/1">Mobile</a></li>
                            <li><a class="dropdown-item" href="/category/2">Laptop</a></li>
                            <li><a class="dropdown-item" href="/category/4">Bike</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                </ul>
                @auth

                    <span class="text-light fw-bold "> Welcome {{ auth()->user()->name }}</span>
                    <a href="/create" class="btn btn-warning mx-2">Post Ad</a>
                    <a href="/manage" class="btn btn-danger mx-2"> <i class="fa-solid fa-gear"></i> Manage Ads </a>
                    <a href="/logout" class="btn btn-danger "><i class="fa-solid fa-door-closed"></i> Logout</a>
                @else
                    <form class="d-flex" role="search">
                        <a href="/create" class="btn btn-warning me-2">Post Ad</a>
                        <a href="/login" class="btn btn-outline-success mx-2"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
                        <a href="/signup" class="btn btn-primary "><i class="fa-solid fa-user-plus"></i> Signup</a>
                    </form>
                @endauth
            </div>
        </div>
    </nav>
    <x-flash />
                


    <main>

        {{ $slot }}


    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
   

    <footer class="py-3 my-4 mb-0 pb-0">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
            <li class="nav-item"><a href="/about" class="nav-link px-2 text-body-secondary">About</a></li>
        </ul>
        <p class="text-center text-body-secondary">&copy; 2023 By Kunal</p>
    </footer>



</body>

</html>

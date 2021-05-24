<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .col-4 ul{
                background: #ddd;
                padding: 40px 10px;
                height: 100vh;
                
            }
            .main-content {
                background: #ddd;
            }
            
            ul li {
                display: block;
                width: 100%;
            }
            ul li a {
                width: 100%;
                display: block;
                padding: 10px;
                border: 1px solid;
                transition: .3s ease-in-out;
            }
            ul li a:hover {
                background: #007bff;
                color: white;
            }
        </style>
    </head>
    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 left-sidebar">
                        <ul class="nav ">
                            <li><a href="{{ route('model.create') }}">Model</a></li>
                        </ul>
                    </div>
                    
                    <div class="col-8 main-content">
                        <p>1. Model & migration Created</p>
                        <p>2. Controller with resources created</p>
                        <p>3. Routes created in web.php</p>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </body>
</html>

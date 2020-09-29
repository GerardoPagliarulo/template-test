<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- STYLE --}}
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">    {{-- Principal font --}}
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">    {{-- Second font --}} 
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">   {{-- FontAwesome --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- SCRIPTS --}}
    <script src="{{ asset('js/app.css') }}"></script>
    <title>template-test</title>
</head>
<body>
    {{-- HEADER --}}
    <header>
        <nav class="main-nav">
            <ul class="nav-option">
                <li>
                    <a href="#">demo</a>
                </li>
                <li>
                    <a href="#">shop</a>
                </li>
                <li>
                    <a href="#">product</a>
                </li>
                <li>
                    <a href="#">lookbook</a>
                </li>
                <li>
                    <a href="#">blog</a>
                </li>    
            </ul>
            <ul class="nav-icon">
                <li>
                    <a href="#"><i class="fas fa-search fa-rotate-90"></i></a>
                </li>
                <li>
                    <a href="#"><i class="far fa-user"></i></a>
                </li>
                <li>
                    <a href="#">
                        <span>0</span>
                        <i class="far fa-heart"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>0</span>
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
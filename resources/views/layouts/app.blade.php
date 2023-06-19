<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .top-nav{
            background-color: darkorange;
            padding: 20px 0;
        }
        .top-nav ul li{
            display: inline;
            padding: 0 28px;
        }
        .top-nav ul li a{
            color: black;
            text-decoration: none;
            font-weight: bold;
        }
        .top-nav ul li a:hover{
            color: white;
        }
    </style>
</head>
<body>
    {{-- navigation --}}
    <div class="top-nav">
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/contacts">Contacts</a></li>
                <li><a href="/login">Login</a></li>
                <li><a href="/signup">Signup</a></li>
            </ul>
        </nav>
    </div>

    @yield('content')

    @yield('side-note')

    {{-- footer --}}
    <div>
        <footer>
            <h1>&copy; All rights reserved.</h1>
        </footer>
    </div>
</body>
</html>
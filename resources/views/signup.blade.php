<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .signup-form{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
        }

        .signup-form form{
            width: 100%;
            background-color: grey;
            padding: 20px;
            border-radius: 5px;
            opacity: 0.8;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
        }
        .signup-form form input[type='text'], input[type='email'], input[type='password']{
            margin-bottom: 5px;
            padding: 10px;
            border-radius: 5px;
            border: none;
            width: 80%;
        }
    </style>
</head>
<body>
    @extends('layouts.app')
    
    @section('content')
    <div class="signup-form">
        <div>
            <h1>Signup here</h1>
            <form method="POST" action="/process_signup">
                @csrf
                <div>
                    <input type="text" name="username" placeholder="Enter username">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Enter email">
                </div>
                <div>
                    <input type="password" name="password" placeholder="Enter password">
                </div>
                <div>
                    <input type="submit" name="signup" value="Signup">
                </div>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
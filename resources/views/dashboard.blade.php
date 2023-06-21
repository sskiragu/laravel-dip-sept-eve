<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            display: flex;
        }

        .main-content{
            margin-left: 5%;
        }

        .side-bar{
            background-color: grey;
            height: 100vh;
            width: 20%;
        }
        .side-bar ul li{
            display: block;
            list-style: none;
            padding: 14px 0;
        }
        .side-bar ul li:hover{
            background-color: gainsboro;
        }
        .side-bar ul li a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="side-bar">
            <nav>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="">Profile</a></li>
                    <li><a href="">Statements</a></li>
                    <li><a href="">Apply Loan</a></li>
                    <li><a href="">Reports</a></li>
                    <li><a href="/logout">Logout</a></li>
                </ul>
            </nav>
        </div>
        <div class="main-content">
            <h1>Main content</h1>
        </div>
    </div>
</body>
</html>
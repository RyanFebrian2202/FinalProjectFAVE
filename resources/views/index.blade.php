<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- <link rel="shortcut icon" href="./Assets/Logo-default.png"> -->
    <title>BelajarNusa</title>
    <script defer src="{{asset('js/script.js')}}"></script>
</head>
<body>
    <header>
        <div class="nav">
            <img src="{{asset('Assets/Logo-default.png')}}" alt="">
        </div>
    </header>

    <section class="content">
        <form id="form" method="POST" action="{{route('login')}}">
            @csrf
            <div class="login-form">
                <div class="header">
                    <h2>Welcome to <span>BelajarNusa</span></h2>
                </div>
                <div class="login-input">
                    <label for="username">Username</label>
                    <div class="space"></div>
                    <div class="space"></div>
                    <input id="username" type="text" name="username" placeholder="Please enter your username">
                    <div class="space"></div>
                    <div class="error"></div>
                </div>
                <div class="login-input">
                    <label for="password">Password</label>
                    <div class="space"></div>
                    <div class="space"></div>
                    <input id="password" type="password" name="password" placeholder="Please enter your password">
                    <div class="space"></div>
                    <div class="error"></div>
                </div>
                <button class="submitBtn" type="submit">Login</button>
            </div>
        </form>
    </section>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/postground-logo.png">

    <title>postground</title>

    <!-- Fonts -->


    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        a {
            letter-spacing: 0.1rem;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div style="width: 100%; ">
        <header style="
        margin:0; box-sizing:border-box;
    position: absolute;
    width: 100vw;
    background: #1f3a93;
    color: #fff;">

            <p style="
    position: relative;
    font-size: 1.2em;
    font-weight:900;
    margin-left:150px;
    z-index:99;">
                postground
            </p>
        </header>
    </div>
    <div class="flex-center position-ref full-height" style="background: url('/img/bg-people.jpeg') bottom center;">
        <div style="margin-right: 200px; position:relative; top:-60px;">
            <span style="color:#fff; font-size:3em;font-weight:900;">Share your ideas.<br> Anywhere anytime</span>
            <p style="max-width: 550px;color: #fff; font-size: 1.5em;margin-bottom:3rem" class="font-black">Post and share your ideas like a pro. The most powerful connecting tool among colleagues, businesses, organizations and friends.
                Reach your friends and colleagues, share your ideas and discover the best of <strong>Postground.</strong>
            </p>

            @auth
            <a href="{{ url('/tweets') }}" style="color: #fff; font-weight:500; font-size: 1.5em; border:2px solid #1f3a93; padding: 10px 30px 10px 30px;background-color:#1f3a93;">Home</a>
            <a href=" {{ route('logout') }}" style="color: #fff; font-weight:500; font-size: 1.5em; border:2px solid #fff; padding: 10px 30px 10px 30px;">Logout</a>
            @else
            <a href="{{ route('login') }}" style="color: #fff; font-weight:500; font-size: 1.5em; border:2px solid #1f3a93; padding: 10px 70px 10px 70px;background-color:#1f3a93;">Login</a>
            <a href="{{ route('register') }}" style="color: #fff; font-weight:500; font-size: 1.5em; border:2px solid #fff; padding: 10px 50px 10px 50px;">Register</a>
            @endauth
        </div>
        <div class="content" style="float: right;">
            <div class="title m-b-md">
                <img src="/img/logo-white-text.png" alt="postground" width="350px" height="auto">
            </div>
        </div>
    </div>

    </div>
</body>

</html>
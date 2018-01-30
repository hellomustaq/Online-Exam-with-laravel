<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Exam</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-image: url("/exx1.jpg");
                background-repeat: no-repeat;
                background-position: right top;
                background-attachment: fixed;
                background-size:100%;
            }
            .blur{
                z-index: 9999;
            }
            .coustm{
                background-color: #6aff7cd9;
                height: 300px;
                width: 700px;
                margin-right: 745px;
                vertical-align: middle;
                border-radius: 0 20px 20px 0;
                
            }
            .coustm1{
                height: 250px;
                margin-top: 70px;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height blur">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content coustm">
                <div class="coustm1">
                    <div class="title m-b-md">
                        <b>Online Exam</b>
                    </div>

                    <div class="links">
                        <a href="{{route('examinfo.create')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Create Exam</a>
                        <a href="{{route('student.index')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Give Exam</a>
                        <a href="{{route('result.index')}}" style="background-color: #ff9f3b;padding: 10px;margin: 10px;color: black;border-radius: 5px;">Result</a>
                    
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!-- <!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Exam</title>
 -->

 
        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> -->

        <!-- Styles -->
        <!-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Online Exam
                </div>

                <div class="links">
                    <a href="{{route('examinfo.create')}}">Create Exam</a>
                    <a href="{{route('student.index')}}">Give Exam</a>
                    <a href="{{route('result.index')}}">Result</a>
                
                </div>
            </div>
        </div>
    </body>
</html>
 -->
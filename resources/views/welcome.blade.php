<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        *{
            color:#ffffff;
        }
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
                background-size: 100% 100%;
                background-repeat: no-repeat;
                background-image:linear-gradient(rgb(0,0,0,0.9),rgb(0,0,0,0)),url('image/home.jpg');
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
                font-size: 54px;
            }
            .body{
                font-size: 20px;
            }

            .links > a {
                color: #FFFFFF;
                /*color: #636b6f;*/
                padding: 0 25px;
                font-size: 13px;
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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    WELCOME TO XYZ_PAGE
                </div>
                <p class="body">Where You Can Connect With People Globally</p>
                    
                <div class="links">
                 <a href="{{ route('services') }}">Services</a>
                    <a href="{{ route('privacypolicy') }}">Policy</a>
                    <a href="{{ route('termcondition') }}">Terms</a>
                    <a href="#">Blog</a>
                    <a href="{{ route('customercare') }}">Customer Care</a>
                    <a href="#">Contact</a>
                    {{-- <div class="container">
                        <div class="row">
                            <span>User: {{ $user->name }}</span>
                            <span>Following:{{ $user->following->count() }}</span>
                            <span>Followers:{{ $user->followers->count() }}</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </body>
</html>
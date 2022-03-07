<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tugas Akhir</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: rgb(85, 101, 248);
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
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

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                background-color: transparent;
                border: 2px solid #ffffff;
                padding: 10px;
                border-radius: 0.6em;
            }

            .links > a:hover , .links > a:focus {
                background-color: #fff;
                outline: 0;
                color: rgb(73, 134, 226);
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            {{-- <a href="{{ route('register') }}">Register</a> --}}
                        {{-- @endif
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <div>
                    <img src="{{ ('assets/image/logoumi.png' ) }}" alt="profile Pic" height="200" width="180">
                </div>
                <div>
                    <h1>Perancangan Aplikasi Berbasis Web<br>
                        Dalam Menentukan Penerima Bantuan Program Keluarga Harapan (Pkh) <br> 
                        Menggunakan Metode Vikor</h1>
                </div>

                <div>
                    @if (Route::has('login'))
                    <div class="links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Next >></a>
    
                            {{-- @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif --}}
                        @endauth
                    </div>
                @endif
                </div>
            </div>
        </div>
    </body>
</html>

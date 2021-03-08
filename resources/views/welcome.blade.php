<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script src={{ asset('assets/jquery/jquery-3.6.0.min.js') }}></script>

        <!-- Styles -->
        <style>
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
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>

    <script>
        var username;
        var satkerId = 0;
        var roleId = 30;
        var jenisDokumen = 'bpk';
        $(document).ready(function()
        {
            var url = new URL(window.location.href);
            // username = url.searchParams.get("username");
            // satkerId = url.searchParams.get("satkerid");
            // roleId = url.searchParams.get("roleid");
            // jenisDokumen = url.searchParams.get("jenisdokumen");
            hideURLParams();
            // getUserData();
        });
        
        function getPrintData() {
            $.ajax({
                type: "GET",
                //   url: "/api/bookings",
                // url: "/api/roomstatus",
                // url: "http://127.0.0.1:5000/api/roomstatus",
                url: "http://mad-be.gakkum.id/api/auth/print-grid",
                data: {
                    jenisdokumen: jenisDokumen, 
                    roleid:roleId,
                    satkerid:satkerId
                },
                success: function (data) 
                {
                //   var dataTemp = JSON.parse(data);
                    console.log(data);
                }
            });
        }

        function getURLParameter(name) {
            return decodeURI((RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]);
        }
        function hideURLParams() {
            //Parameters to hide (ie ?success=value, ?error=value, etc)
            var hide = ['username','satkerid', 'roleid', 'jenisdokumen'];
            for(var h in hide) {
                if(getURLParameter(h)) {
                    history.replaceState(null, document.getElementsByTagName("title")[0].innerHTML, window.location.pathname);
                }
            }
        }
    </script>
</html>

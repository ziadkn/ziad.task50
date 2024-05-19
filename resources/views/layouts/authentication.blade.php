<html>
    <head>
        <title>Authentication - @yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="w-full h-screen flex justify-center items-center">
            <div class="w-full max-w-md p-4 shadow-xl rounded">
                @section('content')

                @show
            </div>
        </div>
    </body>
</html>

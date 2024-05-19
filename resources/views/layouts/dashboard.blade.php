<html>
    <head>
        <title>Books.com - @yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="w-full sticky top-0 px-6 py-2 bg-blue-700 float-left">
            <div class="max-w-7xl w-full m-auto">
                <h2 class="w-1/2 float-left text-lg font-bold text-white">
                    Book.com <span class="font-light">| Dashboard</span>
                </h2>
                <nav class="w-1/2 float-left">
                    <ul class="flex justify-end items-center gap-2 w-full text-white">
                        <li class="cursor-pointer px-4 rounded-full border border-white"><a href="{{ url('/dashboard/books') }}">Books</a></li>
                        <li class="cursor-pointer px-4 rounded-full border border-white"><a href="{{ url('/dashboard/categories') }}">Categories</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="px-6 py-8 float-left w-full">
            <div class="max-w-7xl w-full m-auto">
                @section('content')

                @show
            </div>
        </main>
    </body>
</html>

<html>
    <head>
        <title>Books.com - @yield('title')</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="w-full sticky top-0 px-6 py-2 bg-blue-700 float-left">
            <div class="max-w-7xl w-full m-auto">
                <a href="{{ url("/") }}">
                    <h2 class="cursor-pointer w-1/2 float-left text-lg font-bold text-white">
                        Book.com
                    </h2>
                </a>
                <nav class="w-1/2 float-left">
                    <ul class="flex justify-end items-center gap-2 w-full text-white">
                        @foreach ($categories as $category)
                            <li class="cursor-pointer px-4 rounded-full border border-white"><a href="{{ url("/$category->id") }}">{{ $category->name }}</a></li>
                        @endforeach
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

@extends('layouts.default')

@section('title', 'Homepage')

@section('content')
<main>
    <header class="w-full">
        <h1 class="text-xl font-medium"><span>Books</span>@if ($category->name)<span class="text-sm text-slate-300"> / </span><span>{{ $category->name }}</span>@endif
        </h1>
    </header>
    <div class="mt-8 grid grid-cols-3 gap-4">
        @foreach ($books as $book)
            <article class="py-2 px-4 shadow-xl border border-slate-100 rounded-md">
                <h1 class="text-2xl font-bold">{{ $book->name }}</h1>
                <p class="text-slate-600">{{ $book->description }}</p>
            </article>
        @endforeach
    </div>
</main>
@endsection

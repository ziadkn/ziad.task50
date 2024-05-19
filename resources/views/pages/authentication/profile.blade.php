@extends('layouts.authentication')

@section('title', 'Profile')

@section('content')

    <h1 class="text-2xl font-bold">{{ auth()->user()->name }}</h1>
    <h2 class="text-xl">{{ auth()->user()->email }}</h2>

    <div class="mt-12">
        @if (auth()->user()->role == 'ADMIN')
        <a href="/dashboard/books">
            <button>Go to dashboard</button>
        </a>
        @else
        <a href="/">
            <button>Go to homepage</button>
        </a>
        @endif
    </div>
@endsection

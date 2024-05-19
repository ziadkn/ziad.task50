@extends('layouts.dashboard')

@section('title', 'Create Category')

@section('content')
<header class="w-full flex justify-between items-center">
    <h1 class="text-xl font-medium">Create Book</h1>
</header>
<main class="w-full">
    <form class="mt-8" method="POST" action="/dashboard/categories">
        @csrf

        @if(Session::has('message'))
            <p>{{ Session::get('message') }}</p>
        @endif
        <div class="mt-4">
            <input placeholder="Name" type="text" name="name">
            @error('name')
                <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <button class="mt-4" type="submit">Create</button>
    </form>
</main>
@endsection

@extends('layouts.dashboard')

@section('title', 'Categories')

@section('content')
<header class="w-full flex justify-between items-center">
    <h1 class="text-xl font-medium">Categories</h1>
    <a href="{{ url('/dashboard/categories/create') }}">
        <button>Add Category</button>
    </a>
</header>
<main class="w-full">
    <table class="mt-8">
        <tr>
            <th>#</th>
            <th>Name</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
            </tr>
        @endforeach
    </table>
</main>
@endsection

@extends('layouts.dashboard')

@section('title', 'Books')

@section('content')
<header class="w-full flex justify-between items-center">
    <h1 class="text-xl font-medium">Books</h1>
    <a href="{{ url('/dashboard/books/create') }}">
        <button>Add Book</button>
    </a>
</header>
<main class="w-full">
    <table class="mt-8">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Published At</th>
            <th>Created At</th>
            <th>Category</th>
        </tr>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->name }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->published_at }}</td>
                <td>{{ $book->created_at }}</td>
                <td>{{ $book['category']->name }}</td>
            </tr>
        @endforeach
    </table>
</main>
@endsection

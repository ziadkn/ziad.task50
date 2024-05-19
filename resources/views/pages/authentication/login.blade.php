@extends('layouts.authentication')

@section('title', 'Login')

@section('content')

<form method="POST" action="/authentication/login">
    @csrf

    @if(Session::has('message'))
        <p>{{ Session::get('message') }}</p>
    @endif
    <h1 class="text-2xl font-bold">Access books.com</h1>
    <div>
        <input class="mt-4" placeholder="Email" type="text" name="email">
        @error('email')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>
    <div>
        <input class="mt-2" placeholder="Password" type="password" name="password">
        @error('password')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <button class="mt-4" type="submit">Login</button>
</form>

@endsection

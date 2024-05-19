@extends('layouts.authentication')

@section('title', 'Login')

@section('content')

<form method="POST" action="/authentication/register">
    @csrf

    <h1 class="text-2xl font-bold">Access books.com</h1>

    <input class="mt-4" placeholder="Name" type="text" name="name">
    <input class="mt-2" placeholder="Email" type="text" name="email">
    <input class="mt-2" placeholder="Password" type="password" name="password">

    <button class="mt-4" ctype="submit">Register</button>
</form>

@endsection

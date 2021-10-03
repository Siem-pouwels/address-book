@extends('layouts.master')
@section('contents')
    <form action="/login" method="POST">
    @csrf
    <input type="text" name="email">
    <input type="password" name="password">
    <button class="btn btn-primary">
        <span>Login</span>
    </button>
  </form>
  <a href="/create">Create a new account</a>
@endsection
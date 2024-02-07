@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="name"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="password" placeholder="password"><br>
    <button type="submit">Save</button>
</form>
@endsection
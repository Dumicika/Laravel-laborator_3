@extends('layouts.app')

@section('title')

@section('content')
    <div class="container">
    <h4>Users</h4>
    <a href="{{ route('users.create') }}">Add</a>
    @forelse ($users as $user)
        <div>
            <b>Name:</b>
            {{$user->name}}<br>
            <b>Email:</b>
            {{$user->email}}<br>
        </div>
    @empty
        <p>User not found</p>
    @endforelse
    {{ $users->links() }}
    </div>
@endsection    
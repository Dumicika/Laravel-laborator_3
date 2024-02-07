@extends('layouts.app')

@section('title', 'Create Phone')

@section('content')
    <form action="{{ route('phones.store') }}" method="post">
        @csrf
        <label for="user_id">User:</label>
        <select name="user_id" id="user_id">
            $@foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->fullName() }}</option>
            @endforeach
        </select> <br>
        <label for="phone">Phone:</label>
        <input type="tel" name="phone" id="phone" placeholder="Telefon"><br>
        <button type="submit">Save</button>
    </form>
@endsection
@extends('layouts.app', ['title' => 'Profile'])

@section('content')
    <h1>Profile</h1>
    <p class="muted">User information</p>
    <section class="card">
        <div class="profile-row"><strong>Username</strong> {{ $user->username }}</div>
        <div class="profile-row"><strong>Full name</strong> {{ $user->full_name }}</div>
        <div class="profile-row"><strong>Email</strong> {{ $user->email }}</div>
    </section>
@endsection

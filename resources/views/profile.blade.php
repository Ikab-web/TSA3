@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<header class="hero"><div class="eyebrow">Your account</div><h1>Profile.</h1><p>The student profile associated with this task manager.</p></header>
<section class="panel">@if($user)<div class="profile-grid"><div class="avatar">{{ strtoupper(substr($user->full_name, 0, 1)) }}</div><div><h1>{{ $user->full_name }}</h1><p class="muted">{{ '@'.$user->username }}<br>{{ $user->email }}</p></div></div>@else<div class="empty">No profile has been added yet.</div>@endif</section>
@endsection

@extends('layouts.app')
@section('title', 'Today')
@section('content')
<header class="hero"><div class="eyebrow">{{ today()->format('l, F j, Y') }}</div><h1>Make today<br>count.</h1><p>Here’s your plan for the day. A clear list makes it easier to focus on what matters next.</p></header>
<section class="panel"><div class="panel-head"><h2>Today’s tasks</h2><span class="count">{{ $tasks->count() }} {{ Str::plural('task', $tasks->count()) }}</span></div>
@forelse($tasks as $task)<article class="task"><div><h3>{{ $task->title }}</h3><small>{{ $task->task_date->format('M j, Y') }}</small></div><span class="badge {{ Str::slug($task->status) }}">{{ ucfirst($task->status) }}</span></article>@empty<div class="empty">Nothing on the list for today. Enjoy the breathing room or add a task to get started.</div>@endforelse
</section>
@endsection

@extends('layouts.app')
@section('title', 'All tasks')
@section('content')
<header class="hero"><div class="eyebrow">Your task list</div><h1>Everything<br>in one place.</h1><p>All tasks, arranged by date so you can see what’s done and what’s coming up.</p></header>
<section class="panel"><div class="panel-head"><h2>All tasks</h2><span class="count">{{ $tasks->count() }} {{ Str::plural('task', $tasks->count()) }}</span></div>
@forelse($tasks as $task)<article class="task"><div><h3>{{ $task->title }}</h3><small>{{ $task->task_date->format('l, M j, Y') }}</small></div><span class="badge {{ Str::slug($task->status) }}">{{ ucfirst($task->status) }}</span></article>@empty<div class="empty">No tasks have been added yet.</div>@endforelse
</section>
@endsection

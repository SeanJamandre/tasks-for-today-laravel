@extends('layouts.app', ['title' => "Today's Tasks"])

@section('content')
    <h1>Today's Tasks</h1>
    <p class="muted">{{ today()->format('F j, Y') }}</p>
    <section class="card">
        @forelse ($tasks as $task)
            <div class="task">
                <span class="task-title">{{ $task->title }}</span>
                <span class="badge {{ str_replace(' ', '-', $task->status) }}">{{ $task->status }}</span>
            </div>
        @empty
            <p class="muted">There are no tasks for today.</p>
        @endforelse
    </section>
@endsection

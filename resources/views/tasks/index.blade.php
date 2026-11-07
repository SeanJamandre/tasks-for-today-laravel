@extends('layouts.app', ['title' => 'All Tasks'])

@section('content')
    <h1>All Tasks</h1>
    <p class="muted">Every task, ordered by date.</p>
    <section class="card">
        @foreach ($tasks as $task)
            <div class="task">
                <div>
                    <div class="task-title">{{ $task->title }}</div>
                    <small class="muted">{{ $task->task_date->format('F j, Y') }}</small>
                </div>
                <span class="badge {{ str_replace(' ', '-', $task->status) }}">{{ $task->status }}</span>
            </div>
        @endforeach
    </section>
@endsection

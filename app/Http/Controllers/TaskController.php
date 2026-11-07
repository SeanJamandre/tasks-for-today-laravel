<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\View\View;

class TaskController extends Controller
{
    public function welcome(): View
    {
        $tasks = Task::query()->whereDate('task_date', today())->orderBy('task_date')->get();
        return view('welcome', compact('tasks'));
    }

    public function index(): View
    {
        $tasks = Task::query()->orderBy('task_date')->orderBy('title')->get();
        return view('tasks.index', compact('tasks'));
    }

    public function profile(): View
    {
        $user = User::query()->firstOrFail();
        return view('profile', compact('user'));
    }
}

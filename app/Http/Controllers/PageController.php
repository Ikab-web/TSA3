<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\View\View;

class PageController extends Controller
{
    public function welcome(): View
    {
        $tasks = Task::whereDate('task_date', today())->orderBy('id')->get();

        return view('welcome', compact('tasks'));
    }

    public function tasks(): View
    {
        $tasks = Task::orderBy('task_date')->orderBy('id')->get();

        return view('tasks.index', compact('tasks'));
    }

    public function profile(): View
    {
        $user = User::first();

        return view('profile', compact('user'));
    }

    public function about(): View
    {
        return view('about');
    }
}

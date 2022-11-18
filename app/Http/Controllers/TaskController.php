<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(int $index) {
        $task = Task::find($index);
        return view('/task/index', ['task' => $task]);
    }
}

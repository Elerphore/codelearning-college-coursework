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

    public function store(Request $request) {
        $request->validate(['file' => 'required|mimes:zip,7z']);
        $fileName = time().'.'.$request->file('file')->extension();
        $request->file('file')->move(public_path('uploads'), $fileName);

        return back();
    }
}

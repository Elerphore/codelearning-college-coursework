<?php

namespace App\Http\Controllers;

use App\Models\UserResponse;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function grade() {
        $userResponses = UserResponse::all();
        return view('admin/grade')->with('responses', $userResponses);
    }

    public function downloadTask(int $userId, int $taskId) {
        $userResponse = UserResponse::where('user_id', '=', $userId)
                                        ->where('task_id', '=', $taskId)
                                        ->first();

        return response()->download(public_path('uploads/'.$userId.'/'.$userResponse->name), $userResponse->name);
    }

    public function store(int $userId, int $taskId, Request $request) {
        $userResponse = UserResponse::where('user_id', '=', $userId)
            ->where('task_id', '=', $taskId)
            ->first();

        $userResponse->grade = $request['grade'];
        $userResponse->commentary = $request['commentary'];

        $userResponse->save();

        return back();
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\UserResponse;

class AdminController extends Controller
{
    public function grade() {
        $userResponses = UserResponse::where("grade", NULL)->get();
        return view('admin/grade')->with('responses', $userResponses);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function index (int $index) {
        $course = Course::find($index)->theme->first();

        return view('/theme/index', ['themes' => $course]);
    }
}

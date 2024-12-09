<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Sections;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $students = User::with(['section', 'department'])->latest()->paginate(5);
        $department = Department::count();
        $section = Sections::count();
        return view('page.home.home', compact([
            'students',
            'department',
            'section',
        ]));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Sections;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SectionController extends Controller
{

    //show blocks list
    public function index()
    {
        $sections = Sections::latest()->get();
        return view('page.section.section', compact(['sections']));
    }

    //ipapakita yung block kasama yung mga naka add lang na user
    public function show(Sections $section)
    {
        // natutunan ko lang
        $section->with('users')
            ->latest()
            ->get();

        return view('page.section.viewsection', compact(['section']));
    }


    //show students and block
    public function showStudents(Sections $section, User $user)
    {
        return view(
            'page.section.viewuser',
            compact([
                'section',
                'user'
            ])
        );
    }

    //student page with tables
    public function students()
    {

        $students = User::with(['section', 'department'])
            ->latest()
            ->paginate(5);

        $sections = Sections::latest()
            ->get();

        $departments = Department::latest()
            ->get();

        return view(
            'page.student.student',
            compact([
                'students',
                'sections',
                'departments'
            ])
        );
    }


    //update ginawa ko lang add
    public function addStudentToBlock(Request $request, User $user)
    {
        //update the users blocks
        $user->update([
            'section_id' => $request->blocks,
            'department_id' => $request->departments,
        ]);

        return back();
    }


    //create block
    public function store(Request $request)
    {

        //create block
        Sections::create([
            'section_name' => $request->section_name,
        ]);

        return back();
    }

    //update block
    public function update(Request $request, Sections $section)
    {

        //update block
        $section->update([
            'section_name' => $request->section_name,
        ]);

        return back();
    }

    //delete block
    public function delete(Sections $section)
    {
        //delete block
        $section->delete();
        return back();
    }
}

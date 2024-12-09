<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //diplay all the departments
    public function index()
    {
        $departments = Department::latest()
            ->get();

        return view(
            'page.department.department',
            compact(
                [
                    'departments'
                ]
            )
        );
    }

    //show individual department
    public function show(Department $department)
    {
        // natutunan ko lang
        $department->with('users')
            ->latest()
            ->get(['name', 'created_at']);

        return view('page.department.show', compact(['department']));
    }

    //create new department
    public function store(Request $request)
    {

        Department::create([
            'department_name' => $request->department_name
        ]);

        return back();
    }

    //delete department
    public function delete(Department $department)
    {

        $department->delete();

        return back();
    }

    //update department
    public function update(Request $request, Department $department)
    {

        $department->update([
            'department_name' => $request->department_name
        ]);

        return back();
    }
}

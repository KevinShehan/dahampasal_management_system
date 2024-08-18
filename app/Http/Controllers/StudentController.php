<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    //
     /**
     * Show the form for creating a new student.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pages.Student_create');
    }

    /**
     * Store a newly created student in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */

     public function store(Request $request)
     {
         $validatedData = $request->validate([
             'first_name' => 'required|string|max:255',
             'last_name' => 'required|string|max:255',
             'email' => 'required|email|unique:students,email',
             'phone' => 'nullable|string|max:15',
             'dob' => 'nullable|date',
             'address' => 'nullable|string|max:1000',
         ]);
 
         Student::create($validatedData);
 
         return redirect()->route('students.create')->with('success', 'Student registered successfully!');
     }
}

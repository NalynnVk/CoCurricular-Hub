<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{

    public function index()
    {
        $modules = \App\Models\Module::all(); // Assuming your model is named Doctor
        // dd($modules); // Comment out or remove this line
        return view('instructor_list', ['modules' => $modules]);
    }

    public function createForm()
    {
        return view('instructor_create');
    }

    public function submitForm(Request $request)
    {
        // Validation logic if needed

        \App\Models\Module::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'venue' => $request->input('venue'),
            'schedule' => $request->input('schedule'),
        ]);

        return redirect('/module-instructor')->with('success', 'New Data Insert');
    }

    public function edit($id)
    {
        $modules = \App\Models\Module::find($id);
        return view('instructor_edit', ['modules' => $modules]);
    }

    public function update(Request $request, $id)
    {
        $modules = \App\Models\Module::find($id);
        $modules->update($request->all());
        return redirect('/module-instructor')->with('success', 'Data Successfully Updated');
    }

    public function delete($id)
    {
        $modules = \App\Models\Module::find($id);
        $modules->delete($modules);
        return redirect('/module-instructor')->with('success', 'Data Successfully Deleted');
    }

    // STUDENT
    public function studentModules()
    {
        $modules = Module::all(); // Assuming your model is named Module
        return view('student_module', ['modules' => $modules]);
    }

    public function showModuleDetails($id)
    {
        $module = Module::find($id);

        if (!$module) {
            return redirect('/student-modules')->with('error', 'Module not found');
        }

        return view('student_module_detail', ['module' => $module]);
    }
}

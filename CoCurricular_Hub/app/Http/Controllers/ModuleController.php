<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{

    // public function index()
    // {
    //     $modules = Module::all(); // Fetch all modules from the database
    //     return view('module.instructor.list', compact('modules'));
    // }

    // // print
    // function submit(Request $req)
    // {
    //     // print_r($var->input());
    //     $var = new module();
    //     $var->title = $req->title;
    //     $var->description = $req->description;
    //     $var->venue = $req->venue;
    //     $var->schedule = $req->schedule;
    //     $var->save();
    //     // return view('complete');

    // }

    // public function edit(Module $module)
    // {
    //     // Add logic to show the edit form
    //     return view('module.instructor.edit', compact('module'));
    // }

    // public function delete($id)
    // {
    //     $module = \App\Models\Module::find($id);

    //     if (!$module) {
    //         return redirect()->route('module.index')->with('error', 'Module not found');
    //     }

    //     $module->delete();

    //     return redirect()->route('module.index')->with('success', 'Data Successfully Deleted');
    // }

    public function index()
    {
        $modules = \App\Models\Module::all(); // Assuming your model is named Doctor
        // dd($modules); // Comment out or remove this line
        return view('list', ['modules' => $modules]);
    }

    public function createForm()
    {
        return view('create');
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

        return redirect('/module')->with('success', 'New Data Insert');
    }

    public function edit($id)
    {
        $modules = \App\Models\Module::find($id);
        return view('edit', ['modules' => $modules]);
    }

    public function update(Request $request, $id)
    {
        $modules = \App\Models\Module::find($id);
        $modules->update($request->all());
        return redirect('/module')->with('success', 'Data Successfully Updated');
    }

    public function delete($id)
    {
        $modules = \App\Models\Module::find($id);
        $modules->delete($modules);
        return redirect('/module')->with('success', 'Data Successfully Deleted');
    }

    // STUDENT
    public function studentModules()
    {
        $modules = Module::all(); // Assuming your model is named Module
        return view('studentModules', ['modules' => $modules]);
    }

    public function showModuleDetails($id)
    {
        $module = Module::find($id);

        if (!$module) {
            return redirect('/student-modules')->with('error', 'Module not found');
        }

        return view('moduleDetails', ['module' => $module]);
    }

    //     public function studentModules()
// {
//     // Fetch enrolled modules for the authenticated user
//     $enrolledModules = auth()->user()->enrolledModules;

    //     return view('studentModules', ['enrolledModules' => $enrolledModules]);
// }

    // ModuleController.php

    // public function enrollModule($id)
    // {
    //     $module = Module::find($id);

    //     if (!$module) {
    //         return redirect('/student-modules')->with('error', 'Module not found');
    //     }

    //     // Get the enrolled modules of the authenticated user
    //     $enrolledModules = auth()->user()->enrolledModules;

    //     // Check if the module is already enrolled
    //     if ($enrolledModules->contains($module)) {
    //         return redirect('/student-modules')->with('error', 'You are already enrolled in this module');
    //     }

    //     // Attach the module to the authenticated user
    //     auth()->user()->enrolledModules()->attach($module);

    //     return redirect('/student-modules')->with('success', 'Enrolled successfully');
    // }

    // public function studentEnrolledModules()
    // {
    //     $enrolledModules = auth()->user()->enrolledModules;
    //     return view('enrolledModules', ['enrolledModules' => $enrolledModules]);
    // }


    // public function unenroll($id)
    // {
    //     $enrolledModule = \App\Models\Enrollment::find($id);

    //     if (!$enrolledModule) {
    //         return redirect()->back()->with('error', 'Module not found');
    //     }

    //     $enrolledModule->delete();

    //     return redirect()->back()->with('success', 'Successfully unenrolled from the module');
    // }

}

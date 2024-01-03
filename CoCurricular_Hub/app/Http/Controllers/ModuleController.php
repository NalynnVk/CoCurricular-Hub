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
}

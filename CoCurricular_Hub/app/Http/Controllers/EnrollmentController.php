<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Module;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function enrollModule($id)
    {
        $module = Module::find($id);

        if (!$module) {
            return redirect('/student-module')->with('error', 'Module not found');
        }

        // Check if the user is already enrolled in this module
        if (auth()->user()->enrollments()->where('module_id', $id)->exists()) {
            return redirect('/student-module')->with('error', 'You are already enrolled in this module');
        }

        // Enroll the user in the module
        auth()->user()->enrollments()->create([
            'module_id' => $module->id,
        ]);

        return redirect()->route('enroll-module', ['id' => $module->id])->with('success', 'Enrolled successfully');

    }


    public function studentEnrolledModules()
    {
        $enroll_module = auth()->user()->enrollments()->with('module')->get();
        return view('enroll_module', ['enroll_module' => $enroll_module]);
    }

    // public function unenroll($id)
    // {
    //     $enrollment = Enrollment::find($id);

    //     if (!$enrollment) {
    //         return redirect()->back()->with('error', 'Enrollment not found');
    //     }

    //     // Make sure the authenticated user can only unenroll themselves
    //     if ($enrollment->user_id !== auth()->user()->id) {
    //         return redirect()->back()->with('error', 'You are not authorized to unenroll from this module');
    //     }

    //     $enrollment->delete();

    //     return redirect()->back()->with('success', 'Successfully unenrolled from the module');
    // }

    public function unenroll($id)
    {
        $enrollment = Enrollment::find($id);

        if (!$enrollment) {
            return redirect()->back()->with('error', 'Enrollment not found');
        }

        // Make sure the authenticated user can only unenroll themselves
        if ($enrollment->user_id !== auth()->user()->id) {
            return redirect()->back()->with('error', 'You are not authorized to unenroll from this module');
        }

        $enrollment->delete();

        $module = $enrollment->module; // Get the associated module

        return redirect()->route('enroll-module')->with('success', 'Successfully unenrolled from the module');

    }
}

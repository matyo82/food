<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = 'Staff List';
        $staff = Staff::all();
        return view('staff.index', compact('page_title', 'staff'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = 'Staff create';
        return view('staff.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'responsibility' => 'required',
            'experience' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            'biography' => 'required'
        ]);
        $image = $request->file('thumbnail');
        $path = 'uploads/staff/';

        Staff::create([
            'title' => $request->title,
            'thumbnail' => uploadImage($image, $path),
            'biography' => $request->biography,
            'responsibility' => $request->responsibility,
            'name' => $request->name,
            'experience' => $request->experience,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('staff.index')->with('toast_success', 'Staff Created Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        $page_title = 'Staff Edit';
        return view('staff.edit', ['page_title' => $page_title,
            'staff' => $staff]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Staff $staff)
    {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'responsibility' => 'required',
            'experience' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            'biography' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = 'uploads/staff/';
            $old_path = $staff->thumbnail;
        }

        $staff->update([
            'title' => $request->title,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path, $old_path) : $service->thumbnail,
            'biography' => $request->biography,
            'responsibility' => $request->responsibility,
            'name' => $request->name,
            'experience' => $request->experience,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        return redirect()->route('staff.index')->with('toast_success', 'Staff Update Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Staff $staff)
    {
        if (file_exists(public_path($staff->thumbnail))){
            unlink(public_path($staff->thumbnail));
        }
        $staff->delete();
        return back()->with('toast_success', 'Service deleted Successfully');
    }
}

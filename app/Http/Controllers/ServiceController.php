<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = 'Service List';
        $service = Service::all();
        return view('service.index', compact('page_title', 'service'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = 'Service create';
        return view('service.create', compact('page_title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required'
        ]);
        $image = $request->file('thumbnail');
        $path = 'uploads/service/';

        Service::create([
            'title' => $request->title,
            'thumbnail' => uploadImage($image, $path),
            'description' => $request->description
        ]);

        return redirect()->route('service.index')->with('toast_success', 'Service Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $page_title = 'Service Edit';
        return view('service.edit', ['page_title' => $page_title,
            'service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'mimes:jpg,png,jpeg',
            'description' => 'required'
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = 'uploads/service/';
            $old_path = $service->thumbnail;
        }

        $service->update([
            'title' => $request->title,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path, $old_path) : $service->thumbnail,
            'description' => $request->description
        ]);

        return redirect()->route('service.index')->with('toast_success', 'Service Update Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        if (file_exists(public_path($service->thumbnail))){
            unlink(public_path($service->thumbnail));
        }
        $service->delete();
        return back()->with('toast_success', 'Service deleted Successfully');
    }
}

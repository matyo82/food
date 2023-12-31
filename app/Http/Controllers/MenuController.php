<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page_title = 'Menu List';
        $menues = Menu::all();
        return view('menu.index', compact('page_title', 'menues'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page_title = 'Menu create';
        $categories = Category::where('type', 0)->get();
        return view('menu.create', compact('page_title', 'categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'required|mimes:jpg,png,jpeg',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);
        $image = $request->file('thumbnail');
        $path = 'uploads/menu/';

        Menu::create([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'thumbnail' => uploadImage($image, $path),
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        return redirect()->route('menu.index')->with('toast_success', 'Menu Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu, Request $request)
    {
        $menu = Menu::FindorFail($request->Menu);
        $page_title = 'Menu Edit';
        $categories = Category::where('type', 0)->get();

        return view('menu.edit', ['page_title' => $page_title, 'menu' => $menu, 'categories' => $categories]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $menu = Menu::FindorFail($request->Menu);
        $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'mimes:jpg,png,jpeg',
            'description' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $path = 'uploads/menu/';
            $old_path = $menu->thumbnail;
        }

        $menu->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'thumbnail' => $request->hasFile('thumbnail') ? uploadImage($image, $path, $old_path) : $menu->thumbnail,
            'description' => $request->description,
            'price' => $request->price,
            'status' => $request->status,
        ]);

        return redirect()->route('menu.index')->with('toast_success', 'Menu Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu,Request $request)
    {
        $menu = Menu::FindorFail($request->Menu);
//        dd($menu);
        if (file_exists(public_path($menu->thumbnail))){
            unlink(public_path($menu->thumbnail));
        }
        $menu->delete();
        return back()->with('toast_success', 'Menu deleted Successfully');
    }
}

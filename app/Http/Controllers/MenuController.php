<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();

        return view('menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('menu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'package' => 'required',
                'price' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg',
                'type' => 'required',
            ],
        );


        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->package = $request->package;
        $menu->price = $request->price;
        $menu->type = $request->type;
        $menu->desc = $request->desc;
        $menu->image = $imageName;
        $menu->save();
                 
        return redirect()->route('menu.index')
                        ->with('success','Menu created successfully.');
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
    public function edit(Menu $menu)
    {
        $menu = Menu::find($menu->id);

        return view('menu.edit', compact('menu'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {

        $request->validate(
            [
                'image' => 'image|mimes:jpeg,png,jpg',
            ],
        );
        
        $menu = Menu::find($menu->id);

        if ($request->has('image')) {
            $path = "images/";
            File::delete($path . $menu->image);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $menu->image = $imageName;
        }

        $menu->name = $request->name;
        $menu->package = $request->package;
        $menu->price = $request->price;
        $menu->type = $request->type;
        $menu->desc = $request->desc;
        $menu->save();
        return redirect()->route('menu.index')
                        ->with('success','Menu updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        $path = "images/";
        File::delete($path . $menu->image);
        return redirect()->route('menu.index')
                        ->with('success','Menu deleted successfully');
    }
}

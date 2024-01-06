<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        $no = 1;
        return view('pages.menu.index', compact(['menu','no']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.menu.create', compact([]));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'nama_menu' => 'required'
        ]);

        Menu::create($validate);

        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
    public function edit(string $id)
    {
        $menu = DB::table('menus')->find($id);
        return view('pages.menu.edit', compact(['menu']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $validate = $this->validate($request, [
            'nama_menu' => 'required'
        ]);

        $menu = Menu::where('id', $id)->first();

        $menu->update($validate);

        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Menu::where('id', $id)->first();

        $menu->delete();

        return redirect()->route('menu.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }
}

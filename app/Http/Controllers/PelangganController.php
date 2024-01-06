<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelanggan = Pelanggan::with(['menu'])->get();
        $no = 1;
        return view('pages.pelanggan.index', compact(['pelanggan','no']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::all();
        return view('pages.pelanggan.create', compact(['menu']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $this->validate($request, [
            'menu_id' => 'required',
            'nama_pelanggan' => 'required',
            'tanggal_pesanan' => 'required',
            'waktu_pemesanan' => 'required',
        ]);

        Pelanggan::create($validate);

        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $pelanggan = Pelanggan::with(['menu'])->where('id', $id)->first();
        $menu = Menu::all();
        return view('pages.pelanggan.edit', compact(['pelanggan', 'menu']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $validate = $this->validate($request, [
            'nama_pelanggan' => 'required',
            'tanggal_pesanan' => 'required',
            'waktu_pemesanan' => 'required',
            'menu_id' => 'required'
        ]);

        $menu = Pelanggan::where('id', $id)->first();

        $menu->update($validate);

        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu = Pelanggan::where('id', $id)->first();

        $menu->delete();

        return redirect()->route('pelanggan.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }
}


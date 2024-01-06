<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $menu = count(Menu::all());
        $pelanggan = count(Pelanggan::all());
        return view('home', compact(['menu', 'pelanggan']));
    }
}

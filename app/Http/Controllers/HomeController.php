<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarFestival;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $daftar_festivals = DaftarFestival::get();

        return view('admin.festivalBand', compact('daftar_festivals'), [
            'title' => 'Festival Band'
        ]);
    }
}

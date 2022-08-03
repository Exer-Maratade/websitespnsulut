<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function VisiMisi(){
        return view('layouts.visi-Misi');
    }
}

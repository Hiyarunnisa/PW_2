<?php

namespace App\Http\Controllers;

use App\Models\Kelurahan;
use Illuminate\Http\Request;

class KelurahanController extends Controller
{
    public function index()
    {
        $list_kelurahan = Kelurahan::all();
        return view('kelurahan.show', compact('list_kelurahan'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function index()
    {
        $list_periksa = Periksa::all();
        return view('periksa.show', compact('list_periksa'));
    }
}

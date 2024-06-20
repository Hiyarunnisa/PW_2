<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use Illuminate\Http\Request;

class ParamedikController extends Controller
{
    public function index()
    {
        $list_paramedik = Paramedik::all();
        return view('paramedik.show', compact('list_paramedik'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Unitkerja;
use Illuminate\Http\Request;

class UnitkerjaController extends Controller
{
    public function index()
    {
        $list_unitkerja = Unitkerja::all();
        return view('unitkerja.show', compact('list_unitkerja'));
    }
}

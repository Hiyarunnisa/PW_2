<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PegawaiController extends Controller
{
    public function index()
    {
        $data_layout = [
            'title' => 'Kelola Pegawai'
        ];
        View::share($data_layout);
        return view('pegawai.index');
    }

}

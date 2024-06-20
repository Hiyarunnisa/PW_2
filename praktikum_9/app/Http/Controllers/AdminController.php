<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index() 
    {
        return view('admin.index', ['username' => 'Slamet Santoso']);
    }

    public function pasien()
    {
        $data_layout = [
            'title' => 'Kelola Pasien'
        ];
        View::share($data_layout);
        return view('admin.pasien.index');
    }
}

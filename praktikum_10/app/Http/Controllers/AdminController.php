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


}

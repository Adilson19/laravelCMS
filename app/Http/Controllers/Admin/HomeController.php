<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //  Com o middleware so eh possivel acessar fazendo o login
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function index()
    {
        return view('admin.home');
    }
}

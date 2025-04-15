<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //  Pagina Incial do Nosso Site
    public function index(){
        return view('site.home');
    }
}

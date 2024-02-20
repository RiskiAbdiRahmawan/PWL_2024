<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about(){
        return '2241720060 Riski Abdi Rahmawan';
    }
    public function articles($id){
        return 'Halaman artikel dengan ID ' . $id;
    }
}

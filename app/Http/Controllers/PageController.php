<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return '2341760186<br>Muhammad Abhinaya Zurfa';
    }

    public function articles($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    }
}

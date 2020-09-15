<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class page_controller extends Controller
{
    public function index() {
        $wishes = DB::table('wishes')->get();
        return view('index', ['wish' => $wishes]);
    }
    public function beheer() {
        $wishes = DB::table('wishes')->get();
        return view('beheer', ['wish' => $wishes]);
    }
}

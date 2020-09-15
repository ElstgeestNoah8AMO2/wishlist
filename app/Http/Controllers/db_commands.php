<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class db_commands extends Controller
{
    public function create_wish(Request $request) {
        $naam = $request->get('naam');
        $plaatje = $request->get('plaatje');
        $beschrijving = $request->get('beschrijving');
        $prijs = $request->get('prijs');

        DB::insert('INSERT INTO wishes(`naam`, `plaatje`, `beschrijving`, `prijs`) VALUES(?, ?, ?, ?)', [
            $naam,
            $plaatje,
            $beschrijving,
            $prijs
        ]);
        return redirect('/');
    }
    public function delete_wish(Request $request) {
        $methodid = $request->get('id');
        DB::table('wishes')->where('id', '=', $methodid)->delete();
        return view('beheer');
    }
}

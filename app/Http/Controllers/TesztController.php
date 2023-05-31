<?php

namespace App\Http\Controllers;

use App\Models\Teszt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TesztController extends Controller
{
    public function index(){
        $teszt =  Teszt::all();
        return $teszt;
    }

    public function tesztekKategoriaval(){
        $teszt = DB::table('teszts as t')
        ->join('kategorias as k', 't.kategoriaId', '=', 'k.id')
        ->select('kerdes', 'v1', 'v2', 'v3', 'v4', 'helyes', 'k.kategorianev')
        ->get();
        return $teszt;
    }

    public function show($id){
        $teszt = Teszt::find($id);
        return $teszt;
    }

    public function destroy($id){
        Teszt::find($id)->delete();
    }
}

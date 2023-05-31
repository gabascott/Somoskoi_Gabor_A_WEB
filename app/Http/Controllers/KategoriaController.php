<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index(){
        $kategoria =  Kategoria::all();
        return $kategoria;
    }

    public function show($id){
        $kategoria = Kategoria::find($id);
        return $kategoria;
    }

    public function destroy($id){
        Kategoria::find($id)->delete();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
    // public function index(){
    //     $message ="contato";
    //     return view('contato', compact(message));
    // }

    public function principal(){
        
        return view('site.contato' );
    }
}

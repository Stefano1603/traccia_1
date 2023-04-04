<?php

namespace App\Http\Controllers;

use App\Models\Comuni;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){

        $comunis = Comuni::all();
        return view ('welcome',compact('comunis',));
    }

   
}

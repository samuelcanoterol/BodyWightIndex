<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class BwiController extends Controller
{
    public function index() {
        return view('bwi');
    }

    public function result (Request $request){

        $res = $request->w / ($request->m * $request->m);
        $res = round($res, 2);
        return view('result', ['res'=>$res]);
    }
}

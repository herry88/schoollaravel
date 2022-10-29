<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    //
    public function index()
    {
        return '<h1>Belaajr Controller</h1>';
    }
    // public function product($nama)
    // {
    //     return '<h1>Hallaman Product'.' '. $nama .'</h1>';
    // }
    public function product()
    {
        $d['x'] = 10;
        $d['y'] = 10;
        $d['z'] = $d['x'] + $d['y'];
        // return view('belajar', compact('z'));
        // return view('belajar', ['z'=>$z]);
        return view('belajar', $d);
    }

    public function jumlah()
    {
        $x = 10;
        $y = 10;
        $z = $x + $y;

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Other;

class OtherController extends Controller
{
    public function index(){
        $data = Other::all();
        return view('top', compact('data'));
    }
}

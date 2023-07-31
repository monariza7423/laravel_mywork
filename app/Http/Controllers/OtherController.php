<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class OtherController extends Controller
{
    public function index(){
        $data = News::all();
        return view('top', compact('data'));
    }
}

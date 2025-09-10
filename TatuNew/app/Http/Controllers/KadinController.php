<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;

class KadinController extends Controller
{
    public function index (){
        $logs = Log::all();
        return view ('kadin', compact('logs'));
    }
}

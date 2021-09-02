<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CounterController extends Controller
{    
    public function getCounter()
    {
        $counter = Cache::get('counter', 0);
        $counter += 1;
        Cache::put('counter', $counter); // 10 Minutes

        return view('counter', ['counter' => $counter]);

    }
}

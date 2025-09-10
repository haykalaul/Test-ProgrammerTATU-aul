<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function show($n)
    {
        $result = [];

        for ($i = 1; $i <= $n; $i++) {
            if ($i % 20 === 0) {
                $result[] = "helloworld";
            } elseif ($i % 4 === 0) {
                $result[] = "hello";
            } elseif ($i % 5 === 0) {
                $result[] = "world";
            } else {
                $result[] = $i;
            }
        }

        return implode(' ', $result);
    }
}

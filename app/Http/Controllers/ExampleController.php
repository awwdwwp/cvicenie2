<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function create() {
        return view('example.create');
    }

    public function result(Request $request) {
        $n = $request->input('n');

        $sequence = [];
        $a = 0;
        $b =1;

        while(count($sequence) < 10) {
            if ($a >= $n) {
                $sequence[] = $a;
            }

            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }

        return view('example.result', [
            'sequence' => $sequence,
            'n' => $n
        ]);
    }
}

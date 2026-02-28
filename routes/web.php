<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// Controller route
//Route::get('/example/create', [ExampleController::class, 'create']);
//Route::post('/example/result', [ExampleController::class, 'result']);

//Closure route
Route::get('/example/create', function () {
   return view('example.create');
});

Route::post('/example/result', function (Request $request) {
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
});

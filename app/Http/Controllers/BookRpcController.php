<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookRpcController extends Controller
{
    public function borrowBook(Request $request, int $id) {
        $userId = $request->input('user_id');

        return response(
            "Pouzivatel s ID {$userId} si pozical knihu s ID {$id}."
        );
    }

    public function returnBook(Request $request, int $id) {
        $condition = $request->input('condition');

        return response(
          "Kniha s {$id} bola vratena v stave: {$condition}."
        );
    }
}

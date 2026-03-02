<?php

namespace App\Http\Controllers;

use App\Services\TimeService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

//Api controller
class TimeController extends Controller
{
    public function index(TimeService $timeService) {
        return response()->json(
            [
          'current_time' => $timeService->getCurrentTime(),
            ], Response::HTTP_OK
        );
    }
}

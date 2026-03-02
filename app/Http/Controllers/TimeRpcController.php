<?php

namespace App\Http\Controllers;

use App\Services\TimeService;
use Illuminate\Http\Request;

//rpc controller
class TimeRpcController extends Controller
{
    public function getTime(TimeService $timeService) {
        return response(
          "Aktualny cas je: " . $timeService->getCurrentTime()
        );
    }
}

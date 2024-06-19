<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Process;

class GarageController extends Controller
{
    public function door(): JsonResponse
    {
        $result = Process::run('python ' . resource_path('python/door.py'));
        return response()->json([
            'success' => $result->successful(),
            'output' => $result->output(),
            'exitCode' => $result->exitCode(),
            'error' => $result->errorOutput(),
        ]);
    }
}

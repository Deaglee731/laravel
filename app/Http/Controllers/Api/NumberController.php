<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Number;
use Illuminate\Support\Str;

class NumberController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function generate()
    {
        $number = Number::create(['number' => Str::uuid()]);
        $number->save();

        return response()->json(['message' => 'success', 'number' => $number->number ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function retrieve(Number $number)
    {
        return response()->json(['number' => $number->number]);
    }
}

<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Province extends Controller
{
    public function show()
    {
        $data = \App\Models\Province::latest()->first();
        //return response(json_decode($data['data']));
        //return response(($data['data']));
        return response()->x;
    }
}

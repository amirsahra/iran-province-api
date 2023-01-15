<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Province extends Controller
{
    public function show(Request $request)
    {
        $type = $request->type ?? 'json';

        $data = \App\Models\Province::latest()->first();
        if ($type == 'text'){
            return response($data['data']);
        }

        if ($type == 'xml'){
            return response()->xml(json_decode($data['data'],true));
        }

        return response(json_decode($data['data'],true));

    }
}

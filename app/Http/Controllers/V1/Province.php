<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\CitiesRequest;
use Illuminate\Http\Request;

class Province extends Controller
{
    public function show(CitiesRequest $request)
    {
        $type = $request->input('type') ?? 'json';
        $province = $request->input('province');

        $data = \App\Models\Province::where('province',$province)->first();

        if ($type == 'text'){
            return response($data['cities']);
        }

        if ($type == 'xml'){
            return response()->xml(json_decode($data['cities'],true));
        }

        return response(json_decode($data['cities'],true));

    }
}

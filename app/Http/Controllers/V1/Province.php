<?php

namespace App\Http\Controllers\V1;

use App\Http\Contracts\Strategy\JsonResult;
use App\Http\Contracts\Strategy\TextResult;
use App\Http\Contracts\Strategy\XmlResult;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\CitiesRequest;

class Province extends Controller
{
    public function show(CitiesRequest $request)
    {
        $type = $request->input('type') ?? 'json';
        $province = $request->input('province');

        $data = \App\Models\Province::where('province', $province)->first();

        $resultStrategy = new JsonResult();
        if ($type == 'text') {
            $resultStrategy = new TextResult();
        }

        if ($type == 'xml') {
            $resultStrategy = new XmlResult();
        }

        return $resultStrategy->show($data);

    }
}

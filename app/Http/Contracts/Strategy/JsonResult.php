<?php

namespace App\Http\Contracts\Strategy;

use App\Http\Contracts\ProvinceResultInterface;
use App\Http\Requests\V1\CitiesRequest;

class JsonResult implements ProvinceResultInterface
{
    public function show($data)
    {
        return response(json_decode($data['cities'],true));
    }
}

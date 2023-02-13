<?php

namespace App\Http\Contracts\Strategy;

use App\Http\Contracts\ProvinceResultInterface;

class XmlResult implements ProvinceResultInterface
{
    public function show($data)
    {
        return response()->xml(json_decode($data['cities'],true));
    }
}

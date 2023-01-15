<?php

namespace App\Http\Contracts\Strategy;

use App\Http\Contracts\ProvinceResultInterface;

class TextResult implements ProvinceResultInterface
{
    public function show($data)
    {
        return response($data['cities']);
    }
}

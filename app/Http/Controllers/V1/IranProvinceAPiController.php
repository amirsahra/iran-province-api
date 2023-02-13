<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\IranProvinceRequest;
use App\Models\Province;
use Illuminate\Support\Facades\Http;

class IranProvinceAPiController extends Controller
{
    public function get(IranProvinceRequest $request,Province $province)
    {
        $provinceName = $request->input('province');
        $iranLocationsApiEndpoint = "https://iran-locations-api.vercel.app/api/v1/cities?state={$provinceName}";

        $provincePayload = Http::get($iranLocationsApiEndpoint);
        $provincePayloadBody = ($provincePayload->collect());

        $data = [
            'province'=>$provinceName,
            'cities'=>$provincePayloadBody,
        ];
        $result = $province->insertProvince($data);

        return response()->apiResult(
            'successfully',
            ['provinces' => $result]
        );
    }
}

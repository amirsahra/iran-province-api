<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Province;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IranProvinceAPiController extends Controller
{
    public function get(Request $request,Province $province)
    {
        $iranLocationsApiEndpoint = "https://iran-locations-api.vercel.app/api/v1/cities?state={$request->state}";

        $provincePayload = Http::get($iranLocationsApiEndpoint);
        $provincePayloadBody = ($provincePayload->collect());

        $result = $province->insertProvince($provincePayloadBody);

        return response()->apiResult(
            'successfully',
            ['provinces' => $result]
        );
    }
}

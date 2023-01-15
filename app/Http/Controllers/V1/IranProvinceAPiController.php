<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Province;

use Illuminate\Support\Facades\Http;

class IranProvinceAPiController extends Controller
{
    public function get(Province $province)
    {
        $iranLocationsApiEndpoint = "https://iran-locations-api.vercel.app/api/v1/states";

        $provincesPayload = Http::get($iranLocationsApiEndpoint);
        $provincesPayloadBody = ($provincesPayload->collect());

        $result = $province->insertProvince($provincesPayloadBody);

        return response()->apiResult(
            'successfully',
            ['provinces' => $result]
        );
    }
}

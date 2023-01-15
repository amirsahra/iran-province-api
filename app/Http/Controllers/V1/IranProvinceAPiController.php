<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IranProvinceAPiController extends Controller
{
    public function get()
    {
        $iranLocationsApiEndpoint = "https://iran-locations-api.vercel.app/api/v1/states";

        $provincesPayload  = Http::get($iranLocationsApiEndpoint);
        $provincesPayloadBody = $provincesPayload->body();

        //return ($provincesPayload->body());
    }
}

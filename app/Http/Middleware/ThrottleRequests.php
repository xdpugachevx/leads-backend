<?php

namespace App\Http\Middleware;


class ThrottleRequests extends \Illuminate\Routing\Middleware\ThrottleRequests
{
    protected function resolveRequestSignature($request)
    {
        return $request->fingerprint();
    }
}

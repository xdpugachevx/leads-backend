<?php

namespace App\Http\Controllers;

use App\Contracts\LeadsStore;
use Illuminate\Http\Request;

class LeadsController extends \Laravel\Lumen\Routing\Controller
{
    public function store(Request $request, LeadsStore $leadsStore): array
    {
        $this->validate(
            $request,
            [
                'telegram' => 'required',
                'about' => 'required',
            ]
        );

        $leadsStore->store(
            $request->input('telegram'),
            $request->input('about')
        );

        return ['success' => true];
    }
}

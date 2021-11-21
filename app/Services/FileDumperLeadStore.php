<?php

namespace App\Services;

use App\Contracts\LeadsStore;

class FileDumperLeadStore implements LeadsStore
{
    /** {@inheritDoc} */
    public function store(string $telegram, string $about): void
    {
        file_put_contents(
            '/app/dump.log',
            json_encode(func_get_args()),
            FILE_APPEND
        );
    }
}

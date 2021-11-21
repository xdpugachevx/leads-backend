<?php

namespace App\Services;

use App\Contracts\LeadsStore;
use Psr\Log\LoggerInterface;

class LoggerLeadStore implements LeadsStore
{
    public function __construct(protected LoggerInterface $logger)
    {

    }

    /** {@inheritDoc} */
    public function store(string $telegram, string $about): void
    {
        $this->logger->info(
            json_encode(func_get_args())
        );
    }
}

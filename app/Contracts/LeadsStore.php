<?php

namespace App\Contracts;

interface LeadsStore
{
    /**
     * Stores lead data.
     *
     * @param string $telegram
     * @param string $about
     */
    public function store(string $telegram, string $about): void;
}

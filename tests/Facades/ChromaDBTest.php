<?php

declare(strict_types=1);

use Seyidcmd\ChromaDB\ChromaServiceProvider;
use Seyidcmd\ChromaDB\Facades\ChromaDB;
use Illuminate\Config\Repository;

it('resolves and calls the methods', function () {
    $version = ChromaDB::version();

    expect($version)
        ->toBeString()
        ->toMatch('/^[0-9]+\.[0-9]+\.[0-9]+$/');
});


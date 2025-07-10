<?php

declare(strict_types=1);

use Seyidcmd\ChromaDB\Facades\ChromaDB;
use Seyidcmd\ChromaDB\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(fn() => ChromaDB::deleteAllCollections())
    ->in(__DIR__);


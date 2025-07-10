<?php

declare(strict_types=1);


namespace Seyidcmd\ChromaDB\Facades;

use Seyidcmd\ChromaDB\Embeddings\EmbeddingFunction;
use Seyidcmd\ChromaDB\Generated\Models\Collection;
use Seyidcmd\ChromaDB\Resources\CollectionResource;
use Illuminate\Support\Facades\Facade;

/**
 * @method static string version()
 * @method static int heartbeat()
 * @method static Collection[] listCollections()
 * @method static CollectionResource createCollection(string $name, ?array $metadata = null, ?EmbeddingFunction $embeddingFunction = null)
 * @method static CollectionResource getOrCreateCollection(string $name, ?array $metadata = null, ?EmbeddingFunction $embeddingFunction = null)
 * @method static CollectionResource getCollection(string $name, ?EmbeddingFunction $embeddingFunction = null)
 * @method static void deleteCollection(string $name)
 * @method static void deleteAllCollections()
 *
 * @see \Seyidcmd\ChromaDB\ChromaDB
 */
final class ChromaDB extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'chromadb';
    }
}
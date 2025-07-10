<?php

declare(strict_types=1);

namespace Seyidcmd\ChromaDB\Contracts;

use Seyidcmd\ChromaDB\Embeddings\EmbeddingFunction;
use Seyidcmd\ChromaDB\Resources\CollectionResource;

interface ChromaModel
{

    public function collectionName(): string;

    public function embeddingFunction(): ?EmbeddingFunction;

    function metadataFields(): array;

    function documentFields(): array;

    public function toChromaMetadata(): array;

    public function toChromaDocument(): string;

    public static function getChromaCollection(): CollectionResource;

}
<?php

namespace App\Filament\Resources\Blog\AuthorResource\Pages;

use App\Filament\Resources\Blog\AuthorResource;
use Filament\Resources\Pages\ListRecords;

class ListAuthors extends ListRecords
{
    protected static string $resource = AuthorResource::class;
}

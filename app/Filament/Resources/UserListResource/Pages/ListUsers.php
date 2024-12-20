<?php

namespace App\Filament\Resources\UserListResource\Pages;

use App\Filament\Resources\UserListResource;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserListResource::class;

    protected function getHeaderActions(): array
    {
        return []; // Tidak ada aksi tambahan
    }
}

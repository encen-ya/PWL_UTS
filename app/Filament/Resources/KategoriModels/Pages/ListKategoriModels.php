<?php

namespace App\Filament\Resources\KategoriModels\Pages;

use App\Filament\Resources\KategoriModels\KategoriModelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKategoriModels extends ListRecords
{
    protected static string $resource = KategoriModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

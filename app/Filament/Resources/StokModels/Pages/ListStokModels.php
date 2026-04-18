<?php

namespace App\Filament\Resources\StokModels\Pages;

use App\Filament\Resources\StokModels\StokModelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListStokModels extends ListRecords
{
    protected static string $resource = StokModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

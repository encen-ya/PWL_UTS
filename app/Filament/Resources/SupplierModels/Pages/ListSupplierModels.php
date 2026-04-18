<?php

namespace App\Filament\Resources\SupplierModels\Pages;

use App\Filament\Resources\SupplierModels\SupplierModelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSupplierModels extends ListRecords
{
    protected static string $resource = SupplierModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

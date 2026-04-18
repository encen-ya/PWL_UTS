<?php

namespace App\Filament\Resources\PenjualanDetailModels\Pages;

use App\Filament\Resources\PenjualanDetailModels\PenjualanDetailModelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenjualanDetailModels extends ListRecords
{
    protected static string $resource = PenjualanDetailModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

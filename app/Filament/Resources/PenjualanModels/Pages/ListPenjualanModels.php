<?php

namespace App\Filament\Resources\PenjualanModels\Pages;

use App\Filament\Resources\PenjualanModels\PenjualanModelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenjualanModels extends ListRecords
{
    protected static string $resource = PenjualanModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

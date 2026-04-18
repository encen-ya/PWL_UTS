<?php

namespace App\Filament\Resources\PenjualanDetailModels\Pages;

use App\Filament\Resources\PenjualanDetailModels\PenjualanDetailModelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPenjualanDetailModel extends EditRecord
{
    protected static string $resource = PenjualanDetailModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

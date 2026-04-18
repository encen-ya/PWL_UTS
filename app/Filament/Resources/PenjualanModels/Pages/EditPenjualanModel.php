<?php

namespace App\Filament\Resources\PenjualanModels\Pages;

use App\Filament\Resources\PenjualanModels\PenjualanModelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPenjualanModel extends EditRecord
{
    protected static string $resource = PenjualanModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\SupplierModels\Pages;

use App\Filament\Resources\SupplierModels\SupplierModelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSupplierModel extends EditRecord
{
    protected static string $resource = SupplierModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

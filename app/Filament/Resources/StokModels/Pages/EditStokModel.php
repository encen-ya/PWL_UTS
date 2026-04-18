<?php

namespace App\Filament\Resources\StokModels\Pages;

use App\Filament\Resources\StokModels\StokModelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditStokModel extends EditRecord
{
    protected static string $resource = StokModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

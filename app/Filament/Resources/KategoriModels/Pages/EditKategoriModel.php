<?php

namespace App\Filament\Resources\KategoriModels\Pages;

use App\Filament\Resources\KategoriModels\KategoriModelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKategoriModel extends EditRecord
{
    protected static string $resource = KategoriModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

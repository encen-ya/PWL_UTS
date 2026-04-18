<?php

namespace App\Filament\Resources\LevelModels\Pages;

use App\Filament\Resources\LevelModels\LevelModelResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLevelModel extends EditRecord
{
    protected static string $resource = LevelModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

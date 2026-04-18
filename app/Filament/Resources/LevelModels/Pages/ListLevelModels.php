<?php

namespace App\Filament\Resources\LevelModels\Pages;

use App\Filament\Resources\LevelModels\LevelModelResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLevelModels extends ListRecords
{
    protected static string $resource = LevelModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}

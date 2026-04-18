<?php

namespace App\Filament\Resources\LevelModels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LevelModelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('level_kode')
                    ->required(),
                TextInput::make('level_nama')
                    ->required(),
            ]);
    }
}

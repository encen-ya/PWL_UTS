<?php

namespace App\Filament\Resources\KategoriModels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KategoriModelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kategori_kode')
                    ->required(),
                TextInput::make('kategori_nama')
                    ->required(),
            ]);
    }
}

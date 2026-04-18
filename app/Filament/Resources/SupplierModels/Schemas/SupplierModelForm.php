<?php

namespace App\Filament\Resources\SupplierModels\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SupplierModelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('supplier_kode')
                    ->required(),
                TextInput::make('supplier_nama')
                    ->required(),
                TextInput::make('supplier_alamat')
                    ->required(),
            ]);
    }
}

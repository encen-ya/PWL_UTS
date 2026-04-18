<?php

namespace App\Filament\Resources\PenjualanDetailModels\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PenjualanDetailModelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('penjualan_id')
                    ->relationship('penjualan', 'penjualan_id')
                    ->required(),
                Select::make('barang_id')
                    ->relationship('barang', 'barang_id')
                    ->required(),
                TextInput::make('harga')
                    ->required()
                    ->numeric(),
                TextInput::make('jumlah')
                    ->required()
                    ->numeric(),
            ]);
    }
}

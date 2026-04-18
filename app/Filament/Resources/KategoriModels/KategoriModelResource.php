<?php

namespace App\Filament\Resources\KategoriModels;

use App\Filament\Resources\KategoriModels\Pages\CreateKategoriModel;
use App\Filament\Resources\KategoriModels\Pages\EditKategoriModel;
use App\Filament\Resources\KategoriModels\Pages\ListKategoriModels;
use App\Filament\Resources\KategoriModels\Schemas\KategoriModelForm;
use App\Filament\Resources\KategoriModels\Tables\KategoriModelsTable;
use App\Models\KategoriModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KategoriModelResource extends Resource
{
    protected static ?string $model = KategoriModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return KategoriModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KategoriModelsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListKategoriModels::route('/'),
            'create' => CreateKategoriModel::route('/create'),
            'edit' => EditKategoriModel::route('/{record}/edit'),
        ];
    }
}

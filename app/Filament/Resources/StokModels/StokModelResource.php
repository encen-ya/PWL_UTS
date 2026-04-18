<?php

namespace App\Filament\Resources\StokModels;

use App\Filament\Resources\StokModels\Pages\CreateStokModel;
use App\Filament\Resources\StokModels\Pages\EditStokModel;
use App\Filament\Resources\StokModels\Pages\ListStokModels;
use App\Filament\Resources\StokModels\Schemas\StokModelForm;
use App\Filament\Resources\StokModels\Tables\StokModelsTable;
use App\Models\StokModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StokModelResource extends Resource
{
    protected static ?string $model = StokModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return StokModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StokModelsTable::configure($table);
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
            'index' => ListStokModels::route('/'),
            'create' => CreateStokModel::route('/create'),
            'edit' => EditStokModel::route('/{record}/edit'),
        ];
    }
}

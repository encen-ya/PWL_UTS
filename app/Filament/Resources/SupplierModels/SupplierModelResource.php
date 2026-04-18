<?php

namespace App\Filament\Resources\SupplierModels;

use App\Filament\Resources\SupplierModels\Pages\CreateSupplierModel;
use App\Filament\Resources\SupplierModels\Pages\EditSupplierModel;
use App\Filament\Resources\SupplierModels\Pages\ListSupplierModels;
use App\Filament\Resources\SupplierModels\Schemas\SupplierModelForm;
use App\Filament\Resources\SupplierModels\Tables\SupplierModelsTable;
use App\Models\SupplierModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SupplierModelResource extends Resource
{
    protected static ?string $model = SupplierModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return SupplierModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SupplierModelsTable::configure($table);
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
            'index' => ListSupplierModels::route('/'),
            'create' => CreateSupplierModel::route('/create'),
            'edit' => EditSupplierModel::route('/{record}/edit'),
        ];
    }
}

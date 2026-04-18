<?php

namespace App\Filament\Resources\PenjualanModels;

use App\Filament\Resources\PenjualanModels\Pages\CreatePenjualanModel;
use App\Filament\Resources\PenjualanModels\Pages\EditPenjualanModel;
use App\Filament\Resources\PenjualanModels\Pages\ListPenjualanModels;
use App\Filament\Resources\PenjualanModels\Schemas\PenjualanModelForm;
use App\Filament\Resources\PenjualanModels\Tables\PenjualanModelsTable;
use App\Models\PenjualanModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenjualanModelResource extends Resource
{
    protected static ?string $model = PenjualanModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PenjualanModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenjualanModelsTable::configure($table);
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
            'index' => ListPenjualanModels::route('/'),
            'create' => CreatePenjualanModel::route('/create'),
            'edit' => EditPenjualanModel::route('/{record}/edit'),
        ];
    }
}

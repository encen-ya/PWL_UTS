<?php

namespace App\Filament\Resources\PenjualanDetailModels;

use App\Filament\Resources\PenjualanDetailModels\Pages\CreatePenjualanDetailModel;
use App\Filament\Resources\PenjualanDetailModels\Pages\EditPenjualanDetailModel;
use App\Filament\Resources\PenjualanDetailModels\Pages\ListPenjualanDetailModels;
use App\Filament\Resources\PenjualanDetailModels\Schemas\PenjualanDetailModelForm;
use App\Filament\Resources\PenjualanDetailModels\Tables\PenjualanDetailModelsTable;
use App\Models\PenjualanDetailModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenjualanDetailModelResource extends Resource
{
    protected static ?string $model = PenjualanDetailModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Penjualan Detail';

    protected static ?string $pluralModelLabel = 'Penjualan Detail';

    protected static ?string $modelLabel = 'Penjualan Detail';

    public static function form(Schema $schema): Schema
    {
        return PenjualanDetailModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenjualanDetailModelsTable::configure($table);
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
            'index' => ListPenjualanDetailModels::route('/'),
            'create' => CreatePenjualanDetailModel::route('/create'),
            'edit' => EditPenjualanDetailModel::route('/{record}/edit'),
        ];
    }
}

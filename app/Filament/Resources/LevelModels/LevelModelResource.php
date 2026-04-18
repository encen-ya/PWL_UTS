<?php

namespace App\Filament\Resources\LevelModels;

use App\Filament\Resources\LevelModels\Pages\CreateLevelModel;
use App\Filament\Resources\LevelModels\Pages\EditLevelModel;
use App\Filament\Resources\LevelModels\Pages\ListLevelModels;
use App\Filament\Resources\LevelModels\Schemas\LevelModelForm;
use App\Filament\Resources\LevelModels\Tables\LevelModelsTable;
use App\Models\LevelModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LevelModelResource extends Resource
{
    protected static ?string $model = LevelModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return LevelModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LevelModelsTable::configure($table);
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
            'index' => ListLevelModels::route('/'),
            'create' => CreateLevelModel::route('/create'),
            'edit' => EditLevelModel::route('/{record}/edit'),
        ];
    }
}

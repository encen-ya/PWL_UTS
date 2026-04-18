<?php

namespace App\Filament\Resources\UserModels;

use App\Filament\Resources\UserModels\Pages\CreateUserModel;
use App\Filament\Resources\UserModels\Pages\EditUserModel;
use App\Filament\Resources\UserModels\Pages\ListUserModels;
use App\Filament\Resources\UserModels\Schemas\UserModelForm;
use App\Filament\Resources\UserModels\Tables\UserModelsTable;
use App\Models\UserModel;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class UserModelResource extends Resource
{
    protected static ?string $model = UserModel::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'User';

    protected static ?string $pluralModelLabel = 'User';

    protected static ?string $modelLabel = 'User';

    public static function form(Schema $schema): Schema
    {
        return UserModelForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return UserModelsTable::configure($table);
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
            'index' => ListUserModels::route('/'),
            'create' => CreateUserModel::route('/create'),
            'edit' => EditUserModel::route('/{record}/edit'),
        ];
    }
}

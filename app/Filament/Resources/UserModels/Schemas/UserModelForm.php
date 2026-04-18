<?php

namespace App\Filament\Resources\UserModels\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;


class UserModelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('level_id')
                ->label('Level')
                ->relationship('level', 'level_id')
                ->required(),

            TextInput::make('username')
                ->label('Username')
                ->required()
                ->maxLength(20),

            TextInput::make('nama')
                ->label('Nama')
                ->required()
                ->maxLength(100),

            TextInput::make('password')
                ->label('Password')
                ->password()
                ->required()
                ->maxLength(255),
            ]);
    }
}

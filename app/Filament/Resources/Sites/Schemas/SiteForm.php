<?php

namespace App\Filament\Resources\Sites\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SiteForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Website Name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('url')
                    ->label('Website URL')
                    ->required()
                    ->url()
                    ->maxLength(255),
                DatePicker::make('launched_at')
                    ->label('Launch Date')
                    ->nullable(),
                DatePicker::make('expires_at')
                    ->label('Expiry Date')
                    ->nullable(),
                Select::make('client_id')
                    ->searchable()
                    ->preload()
                    ->label('Client')
                    ->relationship('client', 'name')
                    ->required(),
                Toggle::make('is_featured')
                    ->label('Featured Website')
                    ->default(false),
                TextInput::make('rating')
                    ->label('Website Rating')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->step(0.1)
                    ->nullable(),
            ]);
    }
}

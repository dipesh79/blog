<?php

namespace App\Filament\Resources\Sites\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SitesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Website Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('url')
                    ->label('Website URL')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('client.name')
                    ->label('Client')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('launched_at')
                    ->label('Launch Date')
                    ->date()
                    ->toggleable(isToggledHiddenByDefault:true)
                    ->sortable(),
                TextColumn::make('expires_at')
                    ->label('Expiry Date')
                    ->date()
                    ->toggleable(isToggledHiddenByDefault:true)
                    ->sortable(),
                IconColumn::make('is_featured')
                    ->label('Featured Website')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('rating')
                    ->label('Website Rating')
                    ->sortable(),
            ])
            ->filters([

            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

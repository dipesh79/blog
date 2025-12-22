<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // 1. Name Column (Primary Identifier)
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->description(fn ($record) => $record->email) // Show email under name for quick reference
                    ->grow(), // Allow the name column to take up more space

                // 2. Email Column (Actionable & Copyable)
                TextColumn::make('email')
                    ->label('Email Address')
                    ->searchable()
                    ->copyable() // Allow quick copy to clipboard
                    ->icon('heroicon-m-envelope') // Add a visual cue
                    ->url(fn ($record): string => "mailto:{$record->email}"), // Make it a clickable mailto link

                // 3. Message Preview (Non-Searchable for performance, view full in modal)
                TextColumn::make('message')
                    ->label('Message Snippet')
                    ->limit(50) // Show a brief preview
                    ->tooltip(fn ($state): string => $state) // Show full message on hover
                    ->placeholder('No message provided')
                    ->toggleable(isToggledHiddenByDefault: false), // Keep visible by default

                // 4. Submission Date (Default visibility)
                TextColumn::make('created_at')
                    ->label('Submitted At')
                    ->dateTime('M j, Y H:i') // Readable date format
                    ->sortable()
                    ->since() // Show "X time ago"
                    ->color('secondary')
                    ->toggleable(isToggledHiddenByDefault: false),

                // 5. Updated At (Hidden by default)
                TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
            ])
            ->actions([
                ViewAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc'); // Set a default sort for chronological order
    }
}

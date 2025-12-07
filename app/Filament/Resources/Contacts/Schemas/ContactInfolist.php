<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;


class ContactInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // 1. Contact Details Section
                Section::make('Contact Details')
                    ->description('Information provided by the user via the contact form.')
                    ->columns(2) // Use a two-column layout for small entries
                    ->compact() // Make the section slightly less spaced
                    ->schema([

                        TextEntry::make('name')
                            ->placeholder('N/A')
                            ->icon('heroicon-o-user') // Added icon
                            ->size('lg') // Increased size for prominence
                            ->color('primary'), // Added primary color

                        TextEntry::make('email')
                            ->label('Email Address')
                            ->placeholder('N/A')
                            ->icon('heroicon-o-envelope') // Added icon
                            ->copyable(), // Allow easy copying

                    ]),

                // 2. Message Content Section
                Section::make('Message Content')
                    ->collapsible() // Allow the user to hide/show the message
                    ->schema([

                        TextEntry::make('message')
                            ->placeholder('No message content provided.')
                            ->label('') // Remove label since the section title covers it
                            ->markdown() // Render Markdown if the message supports it
                            ->prose(), // Apply Filament prose styling for better text display

                    ]),

                // 3. Metadata Section
                Section::make('Timestamps & Metadata')
                    ->columns(2)
                    ->schema([

                        TextEntry::make('created_at')
                            ->label('Submitted At')
                            ->dateTime('M j, Y h:i A') // Nicer date format
                            ->icon('heroicon-o-calendar')
                            ->placeholder('N/A'),

                        TextEntry::make('updated_at')
                            ->label('Last Updated')
                            ->dateTime('M j, Y h:i A')
                            ->icon('heroicon-o-clock')
                            ->placeholder('N/A'),

                    ]),
            ]);
    }
}

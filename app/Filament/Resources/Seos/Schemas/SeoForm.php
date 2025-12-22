<?php

namespace App\Filament\Resources\Seos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class SeoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('SEO Details')
                    ->tabs([
                        Tabs\Tab::make('General')
                            ->icon('heroicon-o-adjustments-vertical')
                            ->schema([
                                TextInput::make('uri')
                                    ->label('URI')
                                    ->unique()
                                    ->placeholder('e.g., /about-us, /posts/123')
                                    ->helperText('The path this SEO record applies to (usually relevant for "static" type).')
                                    ->maxLength(65535)
                                    ->required()
                                    ->columnSpanFull(),

                                TextInput::make('title')
                                    ->label('Meta Title')
                                    ->placeholder('70 characters max')
                                    ->maxLength(255),

                                Textarea::make('description')
                                    ->label('Meta Description')
                                    ->placeholder('160 characters max')
                                    ->rows(3)
                                    ->maxLength(65535),

                                Textarea::make('keywords')
                                    ->label('Meta Keywords')
                                    ->placeholder('Comma-separated list (e.g., keyword1, keyword2)')
                                    ->rows(2)
                                    ->maxLength(65535),

                                Select::make('robots')
                                    ->label('Robots Meta Tag')
                                    ->options([
                                        'index, follow' => 'index, follow (Default)',
                                        'noindex, follow' => 'noindex, follow',
                                        'index, nofollow' => 'index, nofollow',
                                        'noindex, nofollow' => 'noindex, nofollow',
                                    ])
                                    ->default('index, follow')
                                    ->columnSpanFull(),
                            ]),

                        Tabs\Tab::make('Open Graph / Social')
                            ->icon('heroicon-o-share')
                            ->schema([
                                TextInput::make('og_title')
                                    ->label('OG Title')
                                    ->placeholder('Title for social media shares')
                                    ->maxLength(255),

                                Textarea::make('og_description')
                                    ->label('OG Description')
                                    ->placeholder('Description for social media shares')
                                    ->rows(3)
                                    ->maxLength(65535),

                                TextInput::make('og_url')
                                    ->label('OG URL')
                                    ->placeholder('Canonical URL for Open Graph')
                                    ->url()
                                    ->maxLength(65535),

                                SpatieMediaLibraryFileUpload::make('og_image')
                                    ->collection('og')
                                    ->visibility('public')
                                    ->disk('public')
                                    ->label('OG Image'),
                            ]),

                        Tabs\Tab::make('Twitter Tags')
                            ->icon('heroicon-o-share')
                            ->schema([
                                Select::make('twitter_card')
                                    ->label('Twitter Card Type')
                                    ->options([
                                        'summary' => 'Summary',
                                        'summary_large_image' => 'Summary Large Image',
                                        'app' => 'App',
                                        'player' => 'Player',
                                    ])
                                    ->default('summary_large_image'),

                                TextInput::make('twitter_title')
                                    ->label('Twitter Title')
                                    ->maxLength(255),

                                Textarea::make('twitter_description')
                                    ->label('Twitter Description')
                                    ->rows(3)
                                    ->maxLength(65535),

                                SpatieMediaLibraryFileUpload::make('twitter_image')
                                    ->collection('twitter')
                                    ->visibility('public')
                                    ->disk('public')
                                    ->label('Twitter Image'),
                            ]),
                        Tabs\Tab::make('Schema.org')
                            ->icon('heroicon-o-code-bracket')
                            ->schema([
                                Textarea::make('json_ld')
                                    ->label('JSON-LD Structured Data')
                                    ->helperText('Paste your valid JSON-LD object here (excluding the <script> tags). Example: {"@context": "https://schema.org", "@type": "Article", ...}')
                                    ->rows(10)
                                    ->placeholder('{"@context": "https://schema.org", "@type": "WebPage"}')
                                    ->dehydrateStateUsing(fn ($state) => is_array($state) ? json_encode($state) : $state)
                                    ->rules(['nullable', 'string', 'json'])
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}

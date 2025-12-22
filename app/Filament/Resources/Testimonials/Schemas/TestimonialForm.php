<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('site_id')
                    ->label('Site')
                    ->relationship('site', 'name')
                    ->required()
                    ->searchable()
                    ->preload()
                    ->placeholder('Select a site'),
                TextArea::make('content')
                    ->label('Testimonial Content')
                    ->required()
                    ->rows(5)
                    ->placeholder('Enter the testimonial content here...'),
            ]);
    }
}

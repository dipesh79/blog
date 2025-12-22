<?php

namespace App\Filament\Resources\Seos\Pages;

use App\Filament\Concerns\RedirectToIndex;
use App\Filament\Resources\Seos\SeoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSeo extends CreateRecord
{
    use RedirectToIndex;

    protected static string $resource = SeoResource::class;
}

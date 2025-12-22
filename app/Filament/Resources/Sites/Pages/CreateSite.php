<?php

namespace App\Filament\Resources\Sites\Pages;

use App\Filament\Concerns\RedirectToIndex;
use App\Filament\Resources\Sites\SiteResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSite extends CreateRecord
{
    use RedirectToIndex;

    protected static string $resource = SiteResource::class;
}

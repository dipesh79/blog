<?php

namespace App\Filament\Resources\Clients\Pages;

use App\Filament\Concerns\RedirectToIndex;
use App\Filament\Resources\Clients\ClientResource;
use Filament\Resources\Pages\CreateRecord;

class CreateClient extends CreateRecord
{
    use RedirectToIndex;

    protected static string $resource = ClientResource::class;
}

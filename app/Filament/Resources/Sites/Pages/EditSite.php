<?php

namespace App\Filament\Resources\Sites\Pages;

use App\Filament\Concerns\RedirectToIndex;
use App\Filament\Resources\Sites\SiteResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSite extends EditRecord
{
    use RedirectToIndex;

    protected static string $resource = SiteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\Seos\Pages;

use App\Filament\Concerns\RedirectToIndex;
use App\Filament\Resources\Seos\SeoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSeo extends EditRecord
{
    use RedirectToIndex;

    protected static string $resource = SeoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\OrResource\Pages;

use App\Filament\Admin\Resources\OrResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOr extends EditRecord
{
    protected static string $resource = OrResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

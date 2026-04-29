<?php

namespace App\Filament\Admin\Resources\OrResource\Pages;

use App\Filament\Admin\Resources\OrResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrs extends ListRecords
{
    protected static string $resource = OrResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\LukisanResource\Pages;

use App\Filament\Admin\Resources\LukisanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLukisans extends ListRecords
{
    protected static string $resource = LukisanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

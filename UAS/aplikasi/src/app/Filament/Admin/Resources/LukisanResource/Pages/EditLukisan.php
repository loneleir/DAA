<?php

namespace App\Filament\Admin\Resources\LukisanResource\Pages;

use App\Filament\Admin\Resources\LukisanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLukisan extends EditRecord
{
    protected static string $resource = LukisanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

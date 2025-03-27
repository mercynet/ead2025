<?php

namespace App\Filament\Resources\CountrySettingResource\Pages;

use App\Filament\Resources\CountrySettingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCountrySetting extends EditRecord
{
    protected static string $resource = CountrySettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

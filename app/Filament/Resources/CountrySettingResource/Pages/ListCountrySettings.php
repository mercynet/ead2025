<?php

namespace App\Filament\Resources\CountrySettingResource\Pages;

use App\Filament\Resources\CountrySettingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCountrySettings extends ListRecords
{
    protected static string $resource = CountrySettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

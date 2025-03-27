<?php

declare(strict_types = 1);

namespace App\Filament\Resources\CountrySettingResource\Pages;

use App\Filament\Resources\CountrySettingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCountrySetting extends CreateRecord
{
    protected static string $resource = CountrySettingResource::class;
}

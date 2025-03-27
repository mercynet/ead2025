<?php

namespace App\Filament\Resources\CoursePriceResource\Pages;

use App\Filament\Resources\CoursePriceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCoursePrices extends ListRecords
{
    protected static string $resource = CoursePriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

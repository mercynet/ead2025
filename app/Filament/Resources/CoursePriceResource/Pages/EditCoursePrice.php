<?php

declare(strict_types = 1);

namespace App\Filament\Resources\CoursePriceResource\Pages;

use App\Filament\Resources\CoursePriceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCoursePrice extends EditRecord
{
    protected static string $resource = CoursePriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

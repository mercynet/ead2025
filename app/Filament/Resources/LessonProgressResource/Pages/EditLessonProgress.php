<?php

declare(strict_types = 1);

namespace App\Filament\Resources\LessonProgressResource\Pages;

use App\Filament\Resources\LessonProgressResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLessonProgress extends EditRecord
{
    protected static string $resource = LessonProgressResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

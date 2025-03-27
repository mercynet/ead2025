<?php

declare(strict_types = 1);

namespace App\Filament\Resources\LessonProgressResource\Pages;

use App\Filament\Resources\LessonProgressResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLessonProgress extends CreateRecord
{
    protected static string $resource = LessonProgressResource::class;
}

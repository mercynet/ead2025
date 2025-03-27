<?php

declare(strict_types = 1);

namespace App\Filament\Resources\CoursePriceResource\Pages;

use App\Filament\Resources\CoursePriceResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCoursePrice extends CreateRecord
{
    protected static string $resource = CoursePriceResource::class;
}

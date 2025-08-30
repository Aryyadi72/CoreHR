<?php

namespace App\Filament\Resources\Grades\Pages;

use App\Filament\Resources\Grades\GradeResource;
use Asmit\ResizedColumn\HasResizableColumn;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageGrades extends ManageRecords
{
    use HasResizableColumn;

    protected static string $resource = GradeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
            // ExcelImportAction::make()->color("primary"),
        ];
    }
}

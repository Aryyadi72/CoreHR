<?php

namespace App\Filament\Resources\Depts\Pages;

use App\Filament\Resources\Depts\DeptResource;
use Asmit\ResizedColumn\HasResizableColumn;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageDepts extends ManageRecords
{
    use HasResizableColumn;

    protected static string $resource = DeptResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
            // ExcelImportAction::make()->color("primary"),
        ];
    }
}

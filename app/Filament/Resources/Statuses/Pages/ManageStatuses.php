<?php

namespace App\Filament\Resources\Statuses\Pages;

use App\Filament\Resources\Statuses\StatusResource;
use Asmit\ResizedColumn\HasResizableColumn;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageStatuses extends ManageRecords
{
    use HasResizableColumn;

    protected static string $resource = StatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
            // ExcelImportAction::make()->color("primary"),
        ];
    }
}

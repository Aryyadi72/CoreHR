<?php

namespace App\Filament\Resources\Jabatans\Pages;

use App\Filament\Resources\Jabatans\JabatanResource;
use Asmit\ResizedColumn\HasResizableColumn;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageJabatans extends ManageRecords
{
    use HasResizableColumn;
    
    protected static string $resource = JabatanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // CreateAction::make(),
            // ExcelImportAction::make()->color("primary"),
        ];
    }
}

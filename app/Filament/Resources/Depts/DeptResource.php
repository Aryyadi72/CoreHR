<?php

namespace App\Filament\Resources\Depts;

use App\Filament\Resources\Depts\Pages\ManageDepts;
use App\Models\Dept;
use BackedEnum;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions\CreateAction;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Icon;
use UnitEnum;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\ForceDeleteBulkAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DeptResource extends Resource
{
    protected static ?string $model = Dept::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Dept';

    protected static ?string $pluralModelLabel = 'Dept';

    protected static ?string $navigationLabel = 'Dept';

    protected static ?int $navigationSort = 1;

    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationBadgeTooltip = 'Dept Total';

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('dept')
                    ->label('Department')
                    ->placeholder('Type name of Department')
                    ->required()
                    ->maxLength(255),
                TextInput::make('inputed_by')
                    ->default('Admin')
                    ->beforeLabel(Icon::make(Heroicon::User))
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('Dept')
            ->columns([
                TextColumn::make('dept')
                    ->label('Department')
                    ->sortable(),
                TextColumn::make('inputed_by')
                    ->color('success')
                    ->icon(Heroicon::User)
                    ->sortable(),
                TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->isoDateTime('LLL'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->isoDateTime('LLL'),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->isoDateTime('LLL'),
            ])
            ->defaultSort('created_at', direction: 'desc')
            ->searchable(['dept', 'inputed_by'])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
                ForceDeleteAction::make(),
                RestoreAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
                CreateAction::make()
                    ->label('Add')
                    ->color('info')
                    ->icon('heroicon-m-plus'),
                ExcelImportAction::make()
                    ->color("success"),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageDepts::route('/'),
        ];
    }

    public static function getRecordRouteBindingEloquentQuery(): Builder
    {
        return parent::getRecordRouteBindingEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('employee_id')
                    ->required(),
                Select::make('status_id')
                    ->relationship('status', 'id')
                    ->required(),
                Select::make('dept_id')
                    ->relationship('dept', 'id')
                    ->required(),
                Select::make('grade_id')
                    ->relationship('grade', 'id')
                    ->required(),
                Select::make('jabatan_id')
                    ->relationship('jabatan', 'id')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('no_telp')
                    ->tel(),
                TextInput::make('alamat')
                    ->required(),
                TextInput::make('kota')
                    ->required(),
                TextInput::make('provinsi')
                    ->required(),
                TextInput::make('pendidikan')
                    ->required(),
                TextInput::make('agama'),
                Select::make('gender')
                    ->options(['Pria' => 'Pria', 'Wanita' => 'Wanita'])
                    ->required(),
                DatePicker::make('born_on')
                    ->required(),
                DatePicker::make('start_work')
                    ->required(),
                DatePicker::make('end_work'),
                Toggle::make('is_active')
                    ->required(),
                TextInput::make('inputed_by')
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Employees\Schemas;

use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class EmployeeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Data Pribadi')->schema([
                    TextInput::make('name')
                        ->required()
                        ->belowContent(Action::make('generate')),
                    TextInput::make('pendidikan')
                        ->required(),
                    TextInput::make('agama'),
                    Select::make('gender')
                        ->options(['Pria' => 'Pria', 'Wanita' => 'Wanita'])
                        ->required(),
                    DatePicker::make('born_on')
                        ->required(),
                ])->columns(2),

                Section::make('Kontak')->schema([
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
                ])->columns(2),

                Section::make('Data Pekerjaan')->schema([
                    TextInput::make('employee_id')
                        ->required(),
                    Select::make('status_id')
                        ->relationship('status', 'status')
                        ->required(),
                    Select::make('dept_id')
                        ->relationship('dept', 'dept')
                        ->required(),
                    Select::make('grade_id')
                        ->relationship('grade', 'grade')
                        ->required(),
                    Select::make('jabatan_id')
                        ->relationship('jabatan', 'jabatan')
                        ->required(),
                    DatePicker::make('start_work')
                        ->required(),
                    DatePicker::make('end_work'),
                    TextInput::make('inputed_by')
                        ->required(),
                    Toggle::make('is_active')
                        ->required(),
                ])->columns(),

                Section::make('Foto')->schema([
                    FileUpload::make('image')
                ]),

            ]);
    }
}

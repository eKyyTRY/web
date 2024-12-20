<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\PasswordInput;
use Filament\Tables\Filters\SelectFilter;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';
    protected static ?string $navigationLabel = 'Buat User'; 
    protected static ?string $navigationGroup = 'Fitur Admin'; // Kelompok navigasi
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('role')
    ->options([
        'admin' => 'Admin',
        'user' => 'User',
    ])
    ->label('Peran')
    ->required()
    ->default('user'),

                TextInput::make('name')
                    ->required()
                    ->label('Nama Lengkap'),
                TextInput::make('phone_number')
                    ->label('Nomor Telepon')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->label('Email'),
                TextInput::make('password')
                    ->password()
                    ->required(fn ($livewire) => $livewire instanceof CreateRecord) // Wajib hanya saat membuat
                    ->dehydrateStateUsing(fn ($state) => bcrypt($state)) // Hash password sebelum menyimpan
                    ->label('Password'),
                // Divisi dengan pilihan
                Forms\Components\Select::make('division')
                    ->options([
                        'Cyber Security' => 'Cyber Security',
                        'Programming' => 'Programming',
                        'Virtual Reality' => 'Virtual Reality',
                    ])
                    ->label('Divisi')
                    ->required(),
                // Status Keaktifan dengan pilihan
                Forms\Components\Select::make('status')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Nonaktif' => 'Nonaktif',
                        'Alumni' => 'Alumni',
                    ])
                    ->label('Status Keaktifan')
                    ->required(),
                Forms\Components\Select::make('class')
                    ->options([
                        '10' => 'Kelas 10',
                        '11' => 'Kelas 11',
                        '12' => 'Kelas 12',
                    ])
                    ->label('Kelas')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('role')
    ->sortable()
    ->label('Peran'),

                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Nama Lengkap'),
                TextColumn::make('phone_number')
                    ->sortable()
                    ->label('Nomor Telepon'),
                TextColumn::make('email')
                    ->sortable()
                    ->searchable()
                    ->label('Email'),
                TextColumn::make('division')
                    ->sortable()
                    ->label('Divisi'),
                TextColumn::make('status')
                    ->sortable()
                    ->label('Status Keaktifan'),
                    TextColumn::make('class')
                    ->sortable()
                    ->label('Kelas'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Dibuat Pada'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

                // Bulk Action Delete
                Tables\Actions\BulkAction::make('delete')
                    ->label('Hapus')
                    ->action(function ($records) {
                        // Mengonversi Collection menjadi array
                        $records = $records instanceof \Illuminate\Database\Eloquent\Collection ? $records->all() : $records;

                        foreach ($records as $record) {
                            $record->delete(); // Menghapus data pengguna
                        }
                    })
                    ->requiresConfirmation()
                    ->icon('heroicon-o-trash')
            ])
            ->filters([
                SelectFilter::make('division')
                    ->options([
                        'Cyber Security' => 'Cyber Security',
                        'Programming' => 'Programming',
                        'Virtual Reality' => 'Virtual Reality',
                    ])
                    ->label('Divisi'),
                SelectFilter::make('status')
                    ->options([
                        'Aktif' => 'Aktif',
                        'Nonaktif' => 'Nonaktif',
                        'Alumni' => 'Alumni',
                    ])
                    ->label('Status Keaktifan'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }



    public static function canViewAny(): bool
{
    return auth()->user() && auth()->user()->role === 'admin'; // Hanya user dengan role 'admin' yang bisa melihat
}

public static function shouldRegisterNavigation(): bool
{
    return auth()->user() && auth()->user()->role === 'admin';
}

    
}
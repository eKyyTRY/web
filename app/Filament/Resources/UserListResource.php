<?php

namespace App\Filament\Resources;

use App\Models\User;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class UserListResource extends Resource
{
    protected static ?string $model = User::class;
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?string $navigationIcon = 'heroicon-o-users'; // Ikon navigasi
    protected static ?string $navigationLabel = 'User'; // Nama di sidebar


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Nama Lengkap'),
                TextColumn::make('division')
                    ->sortable()
                    ->label('Divisi'),
                TextColumn::make('status')
                    ->sortable()
                    ->label('Status Keaktifan'),
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

    public static function getPages(): array
    {
        return [
            'index' => \App\Filament\Resources\UserListResource\Pages\ListUsers::route('/'),
        ];
    }

    public static function canEdit(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false; // Tidak bisa edit
    }

    public static function canDelete(\Illuminate\Database\Eloquent\Model $record): bool
    {
        return false; // Tidak bisa delete
    }

    public static function canCreate(): bool
    {
        return false; // Tidak bisa create
    }
}

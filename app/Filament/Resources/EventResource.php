<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;
    protected static ?string $navigationGroup = 'Menu Lain';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $modelLabel = 'Acara';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required()
                ->label('Judul'),
                Textarea::make('description')->required()
                ->label('Deskripsi'),
                DatePicker::make('event_date')->required()
                ->label('Tanggal Acara'),
                TextInput::make('location')->required()
                ->label('Lokasi'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->label('Judul')
                ->searchable()
                ->sortable(),
                TextColumn::make('description') // Menampilkan deskripsi
                ->label('Deskripsi')
                ->searchable(),
                TextColumn::make('event_date')
                ->label('Tanggal Acara')
                ->searchable()
                ->sortable(),
                TextColumn::make('location')
                ->label('Lokasi')
                ->searchable()
                ->sortable(),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    // Fungsi kontrol akses
    public static function canViewAny(): bool
    {
        return true; // Semua pengguna bisa melihat
    }

    public static function canCreate(): bool
    {
        return auth()->user() && auth()->user()->role === 'admin'; // Hanya admin yang bisa membuat
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->user() && auth()->user()->role === 'admin'; // Hanya admin yang bisa mengedit
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user() && auth()->user()->role === 'admin'; // Hanya admin yang bisa menghapus
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true; // Menampilkan menu untuk semua pengguna
    }

    public static function getRelations(): array
    {
        return [
            // Relasi lain jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AnnouncementResource\Pages;
use App\Filament\Resources\AnnouncementResource\RelationManagers;
use App\Models\Announcement;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Pengumuman'; // Label menu di sidebar

    protected static ?string $navigationGroup = 'Fitur Admin'; // Kelompok menu
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('title') // Input untuk judul
                ->required()
                ->label('Judul Pengumuman'),
            
            Forms\Components\Textarea::make('content') // Input untuk isi pengumuman
                ->required()
                ->label('Isi Pengumuman'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title') // Kolom untuk judul pengumuman
                ->searchable(),
            
            Tables\Columns\TextColumn::make('content') // Kolom untuk isi pengumuman
                ->limit(50),
            
            Tables\Columns\TextColumn::make('created_at') // Kolom untuk tanggal dibuat
                ->dateTime(),
        ])
        ->filters([
            // Tambahkan filter jika diperlukan
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
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }
}

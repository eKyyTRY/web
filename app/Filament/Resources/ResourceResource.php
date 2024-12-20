<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResourceResource\Pages;
use App\Models\Resource as ResourceModel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;

class ResourceResource extends Resource
{
    protected static ?string $model = ResourceModel::class;
    protected static ?string $modelLabel = 'Sumber Belajar';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Akademik';
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

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Sumber'),
                Forms\Components\Select::make('type')
                    ->options([
                        'repo' => 'GitHub/GitLab Sumber',
                        'tutorial' => 'Tutorial/Link',
                    ])
                    ->required()
                    ->label('Tipe Sumber'),
                Forms\Components\TextInput::make('link')
                    ->url()
                    ->required()
                    ->label('Link Sumber'),
                Forms\Components\Textarea::make('description')
                    ->nullable()
                    ->label('Deskripsi Sumber'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->searchable()
                ->sortable()
                ->label('Judul Sumber'),
                TextColumn::make('type')
                ->searchable()
                ->sortable()
                ->label('Tipe Sumber'),
                TextColumn::make('link')
                    ->url(fn ($record) => $record->link)
                    ->openUrlInNewTab()
                    ->searchable()
               
                    ->label('Link'),
                TextColumn::make('description') // Kolom deskripsi
                    ->wrap() // Membungkus teks jika terlalu panjang
                    ->limit(50)
                    ->searchable()
                
                    ->label('Deskripsi'),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika ada
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListResources::route('/'),
            'create' => Pages\CreateResource::route('/create'),
            'edit' => Pages\EditResource::route('/{record}/edit'),
        ];
    }
}

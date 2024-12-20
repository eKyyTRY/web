<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    protected static ?string $navigationGroup = 'Akademik';
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $modelLabel = 'Daftar Projek';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama Projek'),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi Projek'),
                Forms\Components\Select::make('status')
                    ->options([
                        'new' => 'Baru',
                        'ongoing' => 'Berjalan',
                        'completed' => 'Selesai',
                    ])
                    ->default('new'),
                Forms\Components\DatePicker::make('start_date')
                    ->label('Tanggal Mulai'),
                Forms\Components\DatePicker::make('end_date')
                    ->label('Tanggal Selesai'),
                Forms\Components\Select::make('division')
                    ->label('Divisi')
                    ->options([
                        'cyber_security' => 'Cyber Security',
                        'programming' => 'Programming',
                        'virtual_reality' => 'Virtual Reality',
                    ])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable()
                ->label('Nama Projek'),
                Tables\Columns\TextColumn::make('status')->searchable()
                ->sortable()->label('Status'),
                Tables\Columns\TextColumn::make('start_date')->searchable()
                ->sortable()->label('Tanggal Mulai'),
                Tables\Columns\TextColumn::make('end_date')->searchable()
                ->sortable()->label('Tanggal Selesai'),
                Tables\Columns\TextColumn::make('division')
                    ->label('Divisi') // Menampilkan kolom Divisi
                    ->badge() // Opsi tampilan badge
                    ->searchable()
                ->sortable()
                    ->color(fn (string $state): string => match ($state) {
                        'cyber_security' => 'info',
                        'programming' => 'success',
                        'virtual_reality' => 'warning',
                    }),
                Tables\Columns\TextColumn::make('description') // Menambahkan kolom Deskripsi
                    ->label('Deskripsi Projek')
                    ->searchable()
              
                    ->limit(50) // Membatasi jumlah karakter yang ditampilkan, misalnya 50 karakter pertama
                    ->tooltip(fn($state) => $state) // Menambahkan tooltip untuk menampilkan deskripsi lengkap saat dihover
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'new' => 'Baru',
                        'ongoing' => 'Berjalan',
                        'completed' => 'Selesai',
                    ]),
            ]);
    }

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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
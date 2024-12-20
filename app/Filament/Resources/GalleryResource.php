<?php


namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\LinkAction;
use Illuminate\Database\Eloquent\Model;



class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static ?string $modelLabel = 'Dokumentasi';
    protected static ?string $navigationIcon = 'heroicon-o-document';
    protected static ?string $navigationGroup = 'Menu Lain';
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
                    ->label('Judul')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->nullable()
                    ->label('Deskripsi')
                    ->maxLength(1000),
                Forms\Components\FileUpload::make('image_path')
                    ->required()
                    ->image()
                    ->directory('gallery_images')
                    ->maxSize(1024)
                    ->label('Upload Gambar')
                    ->columnSpan('full'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            Tables\Columns\TextColumn::make('title')
            ->sortable()->searchable()->label('Judul'),

            // Menghapus kolom untuk image_path
            // Tables\Columns\ImageColumn::make('image_path')  // Ini sudah cukup untuk menampilkan gambar
            //     ->size(50),  // Ukuran gambar
            Tables\Columns\TextColumn::make('created_at')->sortable()->label('Tanggal Dibuat'),
        ])
        ->filters([
            // Filters can be added here
        ])
        ->actions([
            // Edit and Delete actions
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),

            // Menghapus actions yang terkait dengan image_path
            LinkAction::make('view_image')
                ->url(fn (Gallery $record) => asset('storage/' . $record->image_path)) // Pastikan URL benar
                ->icon('heroicon-o-eye')
                ->label('View Image')
                ->openUrlInNewTab(),

            LinkAction::make('download_image')
                ->url(fn (Gallery $record) => route('gallery.download', $record->id)) // Menggunakan rute yang baru
                ->icon('heroicon-o-arrow-down')
                ->label('Download Image')
                ->openUrlInNewTab(),
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}

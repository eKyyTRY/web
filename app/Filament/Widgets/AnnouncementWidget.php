<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Announcement;

class AnnouncementWidget extends BaseWidget
{
    
    protected function getHeading(): ?string
    {
        return 'Pengumuman Terbaru'; // Menampilkan pengumuman terbaru
    }

    protected function getStats(): array
    {
        // Mengambil pengumuman terbaru
        $announcement = Announcement::latest()->first(); // Mengambil pengumuman terbaru

        return [
            Stat::make('Pengumuman', $announcement ? $announcement->title : 'Tidak Ada Pengumuman')
                ->description($announcement ? $announcement->content : 'Silakan tambahkan pengumuman baru.') // Isi pengumuman
                ->icon('heroicon-o-bell') // Menambahkan ikon bel
                ->color('warning') // Menambahkan warna untuk pemberitahuan
        ];
    }
}

<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\User;

class UserCountWidget extends BaseWidget
{
    protected function getHeading(): ?string
    {
        return 'Statistik Jumlah Pengguna'; // Menampilkan pengumuman terbaru
    }
    protected function getStats(): array

    {
        
        return [
            // Jumlah pengguna di divisi Cyber Security
            Stat::make('Jumlah Pengguna Cyber Security', User::where('division', 'Cyber Security')->count())
                
                ->color('success'), // Pilih warna yang sesuai

            // Jumlah pengguna di divisi Programming
            Stat::make('Jumlah Pengguna Programming', User::where('division', 'Programming')->count())
               
                ->color('primary'), // Pilih warna yang sesuai

            // Jumlah pengguna di divisi Virtual Reality
            Stat::make('Jumlah Pengguna Virtual Reality', User::where('division', 'Virtual Reality')->count())
                
                ->color('warning') // Pilih warna yang sesuai
        ];
    }
}

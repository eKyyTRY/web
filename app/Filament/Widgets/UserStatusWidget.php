<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\User;
class UserStatusWidget extends ChartWidget
{
    protected static ?string $heading = 'Statistik Status Pengguna';

    protected function getData(): array
    {
       // Menghitung jumlah pengguna berdasarkan status
       $activeCount = User::where('status', 'Aktif')->count();
       $inactiveCount = User::where('status', 'Nonaktif')->count();
       $alumniCount = User::where('status', 'Alumni')->count();

       return [
           'datasets' => [
               [
                   'label' => 'Jumlah Pengguna Berdasarkan Status',
                   'data' => [$activeCount, $inactiveCount, $alumniCount], // Data untuk masing-masing status
                   'backgroundColor' => ['#4caf50', '#f44336', '#ff9800'], // Warna untuk setiap kategori
                   'borderWidth' => 1,
               ],
           ],
           'labels' => ['Aktif', 'Nonaktif', 'Alumni'], // Label untuk kategori status
       ];
    }

    protected function getType(): string
    {
        return 'polarArea';
    }
}

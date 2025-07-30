<?php

namespace App\Filament\Resources\InstallSeatResource\Pages;

use App\Filament\Resources\InstallSeatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInstallSeats extends ListRecords
{
    protected static string $resource = InstallSeatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TripDetailResource\Pages;

use App\Filament\Resources\TripDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTripDetails extends ListRecords
{
    protected static string $resource = TripDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

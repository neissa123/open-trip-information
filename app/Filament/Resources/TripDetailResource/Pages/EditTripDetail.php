<?php

namespace App\Filament\Resources\TripDetailResource\Pages;

use App\Filament\Resources\TripDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTripDetail extends EditRecord
{
    protected static string $resource = TripDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

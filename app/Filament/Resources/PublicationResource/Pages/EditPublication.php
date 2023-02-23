<?php

namespace App\Filament\Resources\PublicationResource\Pages;

use App\Filament\Resources\PublicationResource;
use Filament\Pages\Actions;
use Filament\Pages\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditPublication extends EditRecord
{
    protected static string $resource = PublicationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make("viewfile")->label("view pdf file")->url("/storage/".$this->record->file_url)->openUrlInNewTab()
        ];
    }
}

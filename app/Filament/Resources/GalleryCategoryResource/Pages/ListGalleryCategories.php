<?php

namespace App\Filament\Resources\GalleryCategoryResource\Pages;

use App\Filament\Resources\GalleryCategoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListGalleryCategories extends ListRecords
{
    protected static string $resource = GalleryCategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()->withCount("gallery");
    }
}

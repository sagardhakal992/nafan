<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListMembers extends ListRecords
{
    protected static string $resource = MemberResource::class;
    protected function getTableQuery(): Builder
    {
        return parent::getTableQuery()->withCount("projects");
    }
    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

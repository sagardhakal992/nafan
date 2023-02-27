<?php

namespace App\Filament\Widgets;

use App\Models\Member;
use App\Models\Post;
use App\Models\Project;
use App\Models\Publication;
use App\Models\Report;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
{
    return [
        Card::make('Projects', Project::all()->count()),
        Card::make('Posts', Post::all()->count()),
        Card::make('Members', Member::all()->count()),
        Card::make('Publications', Publication::all()->count()),
        Card::make('Reports', Report::all()->count()),
    ];
}
}

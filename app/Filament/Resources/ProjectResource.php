<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("title")->required()->maxLength(255)->columnSpan("full"),
                Textarea::make("short_description")->required()->maxLength(1000)->columnSpan("full"),
                RichEditor::make("description")->required()->columnSpan("full"),
                TextInput::make("location")->required(),
                TextInput::make("donor")->default("Not Provided")->label("Donors Of Project"),
                DatePicker::make("start_date")->maxDate(now())->label("Project Start Date"),
                DatePicker::make("end_date")->label("Project End Date"),
                Select::make("is_completed")->options([
                    "1"=>"Yes",
                    "0"=>"No"
                ])->label("Project Complete")->default(0),
                TextInput::make("fk_member_id")->default(Auth::user()->member->id)->disabled()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")->searchable(),
                Tables\Columns\TextColumn::make("member.name"),
                Tables\Columns\TextColumn::make("created_at")->date("d ,M ,Y"),
                IconColumn::make("is_completed")->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}

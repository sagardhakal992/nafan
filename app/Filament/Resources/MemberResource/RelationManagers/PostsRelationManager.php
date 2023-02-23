<?php

namespace App\Filament\Resources\MemberResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'projects';

    protected static ?string $recordTitleAttribute = 'title';

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
                ])->label("Project Complete")->default(0)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")->searchable(),
                Tables\Columns\TextColumn::make("created_at")->date("d ,M ,Y"),
                IconColumn::make("is_completed")->boolean(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}

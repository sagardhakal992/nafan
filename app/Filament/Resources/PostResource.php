<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Content Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("title")->required()->maxLength(255)->columnSpan("full"),
                Textarea::make("short_description")->required()->maxLength(1000)->columnSpan("full"),
                RichEditor::make("description")->required()->columnSpan("full"),
                Select::make("is_public")->options([
                    "1"=>"Yes",
                    "0"=>"No"
                ])->label("Release Post")->default(0),
                TextInput::make("fk_member_id")->default(Auth::user()->member->id)->disabled()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("title")->searchable(),
                Tables\Columns\TextColumn::make("member.name")->label("Created By"),
                Tables\Columns\TextColumn::make("created_at")->date("d ,M ,Y")->label("Created Date")
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

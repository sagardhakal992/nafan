<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryCategoryResource\Pages;
use App\Filament\Resources\GalleryCategoryResource\RelationManagers;
use App\Filament\Resources\GalleryCategoryResource\RelationManagers\GalleryRelationManager;
use App\Models\GalleryCategory;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryCategoryResource extends Resource
{
    protected static ?string $model = GalleryCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Gallery Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("name")->required(),
                TextInput::make("description")->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("name"),
                TextColumn::make("gallery_count")->label("total images"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            GalleryRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleryCategories::route('/'),
            'create' => Pages\CreateGalleryCategory::route('/create'),
            'edit' => Pages\EditGalleryCategory::route('/{record}/edit'),
        ];
    }
}

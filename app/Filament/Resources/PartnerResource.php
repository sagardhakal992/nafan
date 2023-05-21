<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PartnerResource\Pages;
use App\Filament\Resources\PartnerResource\RelationManagers;
use App\Models\Partner;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\TemporaryUploadedFile;

class PartnerResource extends Resource
{
    protected static ?string $model = Partner::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Employee Management';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make("partner_name")->required()->string(),
                TextInput::make("partner_website_link")->required()->url(),
                FileUpload::make('image_link')
                ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    return (string) now()->timestamp.$file->getClientOriginalName();
                })->columnSpan("full")->acceptedFileTypes(["image/*"]),
                Select::make("show_in_home_page")->options([
                    "1"=>"Yes",
                    "0"=>"No"
                ])->label("Show In HomePage")->default(1),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make("partner_name")->label("Partner Name"),
                TextColumn::make("show_in_home_page")->label("Show In HomePage"),
                TextColumn::make('partner_website_link')->label('Parner Website Link')
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
            'index' => Pages\ListPartners::route('/'),
            'create' => Pages\CreatePartner::route('/create'),
            'edit' => Pages\EditPartner::route('/{record}/edit'),
        ];
    }
}

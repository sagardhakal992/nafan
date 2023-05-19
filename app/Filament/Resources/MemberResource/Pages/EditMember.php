<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use App\Models\Member;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditMember extends EditRecord
{
    protected static string $resource = MemberResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $newData = [
            "name" => $data["name"],
            "email" => $data["email"],
            "age" => $data["age"] ?? null,
            "phone_number" => $data["phone_number"],
            'fk_user_id' => $record->fk_user_id
        ];
        $record->update($newData);
        return $record;
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\MemberResource\Pages;

use App\Filament\Resources\MemberResource;
use App\Models\User;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $user=User::create([
            "name"=>$data["name"],
            "email"=>$data["email"],
            "password"=>Hash::make($data["password"])
        ]);
        $newData=[
            "name"=>$data["name"],
            "email"=>$data["email"],
            "age"=>$data["age"]??null,
            "phone_number"=>$data["phone_number"],
            'fk_user_id'=>$user->id
        ];
        return static::getModel()::create($newData);
    }
}

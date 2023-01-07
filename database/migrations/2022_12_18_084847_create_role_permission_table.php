<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolePermissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_permission', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("fk_role_id");
            $table->unsignedBigInteger("fk_permission_id");
            $table->foreign("fk_role_id")->on("roles")->references("id")->onDelete("cascade");
            $table->foreign("fk_permission_id")->on("permissions")->references("id")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_permission');
    }
}

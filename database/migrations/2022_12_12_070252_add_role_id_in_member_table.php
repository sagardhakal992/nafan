<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRoleIdInMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('members', function (Blueprint $table) {
            $table->unsignedBigInteger("fk_role_id")->nullable();
            $table->foreign("fk_role_id")->on("members")->references("id")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('members', function (Blueprint $table) {
            if(Schema::hasColumn("members","fk_role_id"))
            {
                Schema::table("members", function ($table1) {
                    $table1->dropColumn('fk_role_id');
                 }
                );
            }
        });
    }
}

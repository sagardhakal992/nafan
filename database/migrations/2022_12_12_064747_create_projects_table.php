<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("start_date");
            $table->unsignedBigInteger("end_date");
            $table->string("title");
            $table->string("location");
            $table->string("donor")->nullable();
            $table->longText("short_description");
            $table->longText("description");
            $table->unsignedBigInteger("fk_member_id");
            $table->boolean("is_completed")->default(false);
            $table->foreign("fk_member_id")->on("members")->references("id")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

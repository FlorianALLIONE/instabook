<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_user', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Foreign Key
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->foreignId("photo_id")->constrained()->cascadeOnDelete();
            $table->unique(["user_id", "photo_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('photo_user', function (Blueprint $table) {
            //
        });
    }
}

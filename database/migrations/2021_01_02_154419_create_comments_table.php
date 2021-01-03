<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('text', 255);
            $table->timestamps();

            // Foreign Key
            $table->foreignId("comment_id")->nullable()->constrained()->onDelete("set null");
            $table->foreignId("user_id")->nullable()->constrained()->onDelete("set null");
            $table->foreignId("photo_id")->nullable()->constrained()->onDelete("set null");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}

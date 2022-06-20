<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();

            $table->string('name', 100);
            $table->text('description')->nullable();
            $table->string('thumb', 255)->nullable();
            $table->string('image_profile', 255)->nullable();
            $table->string('bg_image')->nullable();
            $table->string('first_appereance', 100)->nullable();
            $table->string('occupation')->nullable();
            $table->string('alias', 255)->nullable();
            $table->string('base_of_operation', 255)->nullable();
            $table->string('facebook', 255)->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}

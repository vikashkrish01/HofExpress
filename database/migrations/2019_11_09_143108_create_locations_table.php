<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->uuid('id');
            $table->primary('id');
<<<<<<< HEAD
            $table->uuid('user_id');
            $table->string('name');
            $table->string('location');
            $table->text('about');
            $table->string('image')->nullable()->default('logo.png');
            $table->string('cover_image')->nullable()->default('cover.png');
            $table->string('phone_number')->nullable();
=======
>>>>>>> 10cc9ef1462e18285c9baf43432a460e66ad69b5
            $table->softDeletes();
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
        Schema::dropIfExists('locations');
    }
}

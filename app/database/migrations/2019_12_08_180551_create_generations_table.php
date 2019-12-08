<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_generations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('auto_model_id');
            $table->string('name', 255);
            $table->string('years', 25);
            $table->string('image', 255);
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto_generations');
    }
}

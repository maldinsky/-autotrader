<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adverts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id');
            $table->integer('type');
            $table->bigInteger('brand_id');
            $table->bigInteger('model_id');
            $table->integer('year');
            $table->bigInteger('body_id');
            $table->string('modification', 64);
            $table->integer('condition_id');
            $table->decimal('price', 8,2);
            $table->integer('currency_id');
            $table->longText('description');
            $table->integer('engine_type');
            $table->integer('engine_gas');
            $table->integer('engine_hybrid');
            $table->bigInteger('mileage');
            $table->integer('transmission_id');
            $table->integer('driving_id');
            $table->string('vin', 17);
            $table->integer('color_id');
            $table->integer('interior_material_id');
            $table->integer('interior_color_id');
            $table->integer('exchange');
            $table->integer('status');
            $table->integer('region_id');
            $table->integer('city_id');
            $table->string('name', 64);
            $table->string('phone', 25);
            $table->bigInteger('views');
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
        Schema::dropIfExists('adverts');
    }
}

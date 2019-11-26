<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributesAdvertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auto_attribute_groups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 64);
        });

        Schema::create('auto_attributes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 64);
            $table->bigInteger('group_id');
        });

        Schema::create('auto_advert_attribute', function (Blueprint $table) {
            $table->bigInteger('advert_id');
            $table->bigInteger('attribute_id');
            $table->primary(['advert_id', 'attribute_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('auto_attribute_groups');
        Schema::dropIfExists('auto_attributes');
        Schema::dropIfExists('auto_advert_attribute');
    }
}

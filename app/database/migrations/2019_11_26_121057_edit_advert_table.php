<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditAdvertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('adverts', function (Blueprint $table) {
            $table->string('modification')->nullable()->change();
            $table->string('engine_gas')->default(0)->change();
            $table->string('engine_hybrid')->default(0)->change();
            $table->string('views')->default(0)->change();
            $table->string('status')->default(0)->change();
            $table->unique('vin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

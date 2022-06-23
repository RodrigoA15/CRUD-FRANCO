<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHourAmbientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hour_ambients', function (Blueprint $table) {
            $table->id();
            $table->string('hora_lunes', 12);
            $table->string('hora_martes', 12);                                                                    
            $table->string('hora_miercoles', 12);                                                                    
            $table->string('hora_jueves', 12);                                                                    
            $table->string('hora_viernes', 12);                                                                    

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
        Schema::dropIfExists('hour_ambients');
    }
}

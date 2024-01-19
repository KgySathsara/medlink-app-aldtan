<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReccomandedOpdDrugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reccomanded_opd_drugs', function (Blueprint $table) {
            $table->id();
            $table->integer('patient_id');
            $table->date('appoinment_date');
            $table->string('drug');
            $table->string('dose');
            $table->string('period');
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
        Schema::dropIfExists('reccomanded_opd_drugs');
    }
}

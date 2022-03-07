<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skrips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kriteria');
            $table->foreign('id_kriteria')->references('id')->on('kriterias')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('kd_skrips')->unique();
            $table->string('nm_skrips');
            $table->double('nilai');
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
        Schema::dropIfExists('skrips');
    }
}

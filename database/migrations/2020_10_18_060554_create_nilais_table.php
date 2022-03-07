<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->foreignId('id_alternatif');
            $table->foreign('id_alternatif')->references('id')->on('alternatifs')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('id_kriteria');
            $table->foreign('id_kriteria')->references('id')->on('kriterias')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->integer('nilai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nilais');
    }
}

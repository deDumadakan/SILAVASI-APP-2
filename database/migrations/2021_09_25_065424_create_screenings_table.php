<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScreeningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('screenings', function (Blueprint $table) {
            $table->id();
            $table->string('petugas_id');
            $table->string('nik');
            $table->string('nama');
            $table->string('noHP');
            $table->date('tglLahir');
            $table->string('dosisVaksin');
            $table->date('tglVaksin');
            $table->string('suhu');
            $table->string('tekananDarah');
            $table->string('p1');
            $table->string('p2');
            $table->string('p3');
            $table->string('p4');
            $table->string('p5');
            $table->string('p6');
            $table->string('p7');
            $table->string('p8');
            $table->string('p9');
            $table->string('p10');
            $table->string('p11');
            $table->string('p12');
            $table->string('p13');
            $table->string('p14a');
            $table->string('p14b');
            $table->string('p14c');
            $table->string('p14d');
            $table->string('p14e');
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
        Schema::dropIfExists('screenings');
    }
}

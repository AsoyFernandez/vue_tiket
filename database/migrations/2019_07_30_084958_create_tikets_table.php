<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTiketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tikets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name_tiket');
            $table->string('harga_tiket');
            $table->string('jenis_tiket');
            $table->unsignedInteger('categori_id');
            $table->foreign('categori_id')->references('id')->on('categoris')->onDelete('cascade');
            $table->string('jumlah_tiket');
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
        Schema::dropIfExists('tikets');
    }
}

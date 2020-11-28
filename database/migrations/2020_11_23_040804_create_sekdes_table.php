<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSekdesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sekdes', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sekdes');
            $table->date('tanggal_lahir_sekdes');
            $table->char('jenis_kelamin_sekdes');
            $table->string('foto_sekdes');
            $table->integer('kades_id');
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
        Schema::dropIfExists('sekdes');
    }
}

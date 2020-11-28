<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToPengunjungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengunjung', function (Blueprint $table) {
            $table->integer('informasi_id_informasi')->after('komentar');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengunjung', function (Blueprint $table) {
            $table->dropColumn('informasi_id_informasi');
        });
    }
}

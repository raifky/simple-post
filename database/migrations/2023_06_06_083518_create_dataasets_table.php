<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataasetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dataasets', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('kode')->nullable()->default("-");
            $table->string('nama_aset');
            $table->string('kategori');
            $table->string('merk')->nullable()->default("-");
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
        Schema::dropIfExists('dataasets');
    }
}

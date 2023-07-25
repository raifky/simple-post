<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTotalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totals', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->char('kode');
            $table->string('nama');
            $table->timestamps();

            // $table->foreign('kode')->references('id')->on('totals');
        });

        // Schema::table('totals', function (Blueprint $table) {
         
        //     $table->foreign('kode_id')->references('id')->on('totals')->onDelete('cascade')->onUpdate('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('totals');
    }
}

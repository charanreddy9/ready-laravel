<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddScanedToInsertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('inserts', function (Blueprint $table) {
			 $table->string('scaned')->nullable();
			 $table->string('videodata')->nullable();
			 $table->string('fingerpoint')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('inserts', function (Blueprint $table) {
            //
        });
    }
}

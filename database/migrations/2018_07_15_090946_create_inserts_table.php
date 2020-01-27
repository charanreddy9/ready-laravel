<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('inserts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email',40)->unique();
            $table->string('password');
            $table->string('mobile');
            $table->string('games');
            $table->string('intrest')->nullable();
             $table->string('gender');
            $table->date('date');
            $table->string('range');
            $table->text('textarea');
			$table->text('uploadimage')->nullable();
			$table->decimal('latitude',10, 7);
			$table->decimal('longitude',10, 7);
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
        Schema::dropIfExists('inserts');
    }
}

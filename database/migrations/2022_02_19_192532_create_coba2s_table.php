<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoba2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coba2s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_id');
            $table->string('isi');
            $table->text('isi2');
            $table->text('isi3');
            $table->timestamp('publis')->nullable();
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
        Schema::dropIfExists('coba2s');
    }
}

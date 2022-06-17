<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoba1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coba1s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_id');
            $table->foreignId('user_id');
            $table->string('isi');
            $table->string('slug');
            $table->string('img')->nullable();
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
        Schema::dropIfExists('coba1s');
    }
}

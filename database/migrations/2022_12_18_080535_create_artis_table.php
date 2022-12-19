<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artis', function (Blueprint $table) {
            $table->string('kd_artis',100)->primary();
            $table->string('nm_artis',100);
            $table->string('jk',100);
            $table->integer('bayaran');
            $table->integer('award');
            $table->string('negara',100);
            
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
        Schema::dropIfExists('artis');
    }
};

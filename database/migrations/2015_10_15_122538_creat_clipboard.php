<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatClipboard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clipboard', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hash')->unique();
            $table->text('content');
            $table->integer('try');
            $table->boolean('viewed');
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
        Schema::drop('clipboard');
    }
}

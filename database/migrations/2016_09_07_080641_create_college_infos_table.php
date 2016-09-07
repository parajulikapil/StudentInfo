<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCollegeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('college_infos', function (Blueprint $table) {
            $table->string('college_name');
            $table->float('percentage');
            $table->string('board');
            $table->float('total');
            $table->string('user_email')->unique();
            $table->foreign('user_email')
                ->references('email')->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('college_infos');
    }
}

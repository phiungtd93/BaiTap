<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTatoldateoffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totaldateoff', function (Blueprint $table) {
        	$table->string('user_cd');
            $table->integer('year');
            $table->float('total_day');
            $table->float('day_left');
            $table->text('note');
            $table->string('create_by');
            $table->timestamps();
            $table->string('update_by');
            $table->string('deleted_by');
            $table->softDeletes();
            $table->primary(['user_cd', 'year']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tatoldateoff');
    }
}

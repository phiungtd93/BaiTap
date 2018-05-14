<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('library', function (Blueprint $table) {
            $table->integer('language_id');
            $table->integer('library_id');
            $table->integer('number');
            $table->string('name');
            $table->text('note');
            $table->string('create_by');
            $table->timestamps();
            $table->string('update_by');
            $table->string('deleted_by');
            $table->softDeletes();
            $table->primary(['language_id', 'library_id', 'number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('library');
    }
}

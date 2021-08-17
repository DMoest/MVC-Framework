<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function(Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('category_id');
            $table->foreignId('author_id');
            $table->foreignId('publisher_id');
            $table->string('isbn')->unique();
            $table->string('title')->unique();
            $table->string('picture')->nullable();
            $table->date('released');
            $table->timestamp('added_to_library')->useCurrent();
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
        Schema::dropIfExists('books');
    }
}

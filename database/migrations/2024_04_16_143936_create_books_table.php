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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', 13)->unique(); // String with max length of 13 characters (assuming ISBN-13), unique
            $table->string('title');
            $table->string('author');
            $table->text('description')->nullable();
            $table->date('date_published')->nullable();
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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); 
            $table->string('isbn', 13)->unique(); 
            $table->string('title');
            $table->string('author');
            $table->text('description')->nullable(); 
            $table->date('date_published')->nullable(); 
            $table->timestamps(); 
        });
    }
};
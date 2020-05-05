<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('readings', function (Blueprint $table) {
            $table->id();

            $table->integer('users_id')->unsigned()->nullable();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('places_id')->unsigned()->nullable();
            $table->foreign('places_id')->references('id')->on('places')->onDelete('cascade');

            $table->decimal('temperature')->nullable();
            $table->decimal('co')->nullable();
            $table->decimal('humidity')->nullable();
            $table->decimal('dust_particle')->nullable();

            $table->timestamps();

            $table->string('comments')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('readings');
    }
}

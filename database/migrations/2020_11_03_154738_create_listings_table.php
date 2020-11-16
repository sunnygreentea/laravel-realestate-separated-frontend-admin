<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('ptype_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->foreign('ptype_id')->references('id')->on('propertytypes')->onDelete('cascade'); 
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade'); 
            
            $table->boolean('is_featured')->default(0)->nullable();
            $table->integer('price');
            $table->integer('beds')->nullable();
            $table->integer('baths')->nullable();
            $table->integer('garage')->nullable();
            $table->integer('area')->nullable();
            $table->text('amenties')->nullable();
            $table->text('description')->nullable();
            $table->float('lat', 15, 8)->nullable();
            $table->float('lng', 15, 8)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings');
    }
}

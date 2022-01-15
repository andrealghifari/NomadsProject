<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // This table is for /details
    public function up()
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('title'); // Title Travel
            $table->string('slug'); // description in url
            $table->string('location'); // description location under title travel
            $table->longText('about'); //about travel
            $table->string('featured_event');
            $table->string('language'); //menu
            $table->string('foods'); //menu
            $table->date('departure_date'); //menu
            $table->string('duration'); //menu
            $table->string('type');
            $table->integer('price');
            $table->softDeletes();
            $table->timestamps();
            // $table->primary('id');
        });
        // Schema::table('travel_packages', function (Blueprint $table) {
        //     $table->string('customer_comment');
        //     $table->float('customer_satisfaction');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_packages');
    }
}

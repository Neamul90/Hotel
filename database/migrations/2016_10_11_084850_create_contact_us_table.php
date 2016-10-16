<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactUsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('contact_us', function (Blueprint $table) {

            $table->increments('contact_id');
            $table->string('email', 100);
            $table->string('address', 255);
            $table->string('phone', 50);
            $table->string('facebook', 200);
            $table->string('google_plus', 200);
            $table->string('linkedin', 200);
            $table->string('twitter', 200);
            $table->string('map');
            $table->string('logo');
            $table->string('slogan_header', 250);
            $table->string('slogan_footer', 250);
            $table->string('offer_image');
            $table->string('slider');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('contact_us');
    }

}

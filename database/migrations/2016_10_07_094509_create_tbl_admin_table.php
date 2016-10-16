<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_admin', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('firstname',50);
            $table->string('lastname',50);
            $table->string('country',50);
            $table->string('occupation',50);
            $table->string('email',50);
            $table->string('password');
            $table->string('image');
            $table->string('skype',100)->nullable();
            $table->string('facebook',100)->nullable();
            $table->string('website',100)->nullable();
            $table->text('address');	
            $table->text('about');	
            $table->string('mobile',30);	
            $table->string('publication_status',1);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_admin');
    }
}

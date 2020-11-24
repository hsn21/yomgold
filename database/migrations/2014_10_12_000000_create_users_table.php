<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateregistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      if(!Schema::hasTable('registrations'))
      {
        Schema::create('registrations', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->string('display_name');
          $table->string('user_name', 60)->unique();
          $table->string('email', 128)->unique();
          $table->string('password', 60);
          $table->string('retypepassword', 60);
          $table->string('secret_key')->unique();;
          $table->timestamps();
        });
      }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registrations');
    }
}

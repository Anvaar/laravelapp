<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
              $table->increments('id');
              $table->string('fname',100);
              $table->string('lname',100);
              $table->string('email',100)->unique();
              $table->bigInteger('zipcode');
              $table->longText('address');
              $table->bigInteger('phone');
              $table->tinyInteger('round');
              $table->string('type');
            $table->string('campaign_name');
            $table->boolean('status');
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
        Schema::drop('records');
    }
}

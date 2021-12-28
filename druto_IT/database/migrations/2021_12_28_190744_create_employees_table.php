<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('Position',255);
            $table->integer('phone_no');
            $table->text('address');
            $table->text('image')->nullable();
            $table->string('fb_link',255)->nullable();
            $table->string('linkden_link',255)->nullable();
            $table->string('instagram_link',255)->nullable();
            $table->string('twitter_link',255)->nullable();
            $table->tinyInteger('status');
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
        Schema::dropIfExists('employees');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('district_id');
            $table->string('name_en')->nullable();
            $table->string('name_si')->nullable();
            $table->string('name_ta')->nullable();
            $table->string('sub_name_en')->nullable();
            $table->string('sub_name_si')->nullable();
            $table->string('sub_name_ta')->nullable();
            $table->integer('postalcode')->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
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
        Schema::dropIfExists('cities');
        Schema::table('cities', function (Blueprint $table) {
            $table->dropForeign(['district_id']);
        });
    }
};

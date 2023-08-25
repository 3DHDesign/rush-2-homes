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
        Schema::create('property_informations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property_code');
            $table->unsignedBigInteger('property_type_id');
            $table->unsignedBigInteger('agent_id');
            $table->mediumText('en_title');
            $table->mediumText('si_title')->nullable();
            $table->mediumText('ta_title')->nullable();
            $table->unsignedBigInteger('property_category_id');
            $table->unsignedBigInteger('province_id');
            $table->string('label');
            $table->string('currency', 3);
            $table->string('price');
            $table->longText('slug');
            $table->integer('sqft')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('garages')->nullable();
            $table->integer('floors')->nullable();
            $table->string('aminities')->nullable();
            $table->longText('en_description')->nullable();
            $table->longText('si_description')->nullable();
            $table->longText('ta_description')->nullable();
            $table->text('document')->nullable();
            $table->longText('gallery');
            $table->mediumText('en_address')->nullable();
            $table->mediumText('si_address')->nullable();
            $table->mediumText('ta_address')->nullable();
            $table->mediumText('zip_code')->nullable();
            $table->longText('map')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('district_id');
            $table->mediumText('meta_title')->nullable();
            $table->string('status')->nullable();

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
        Schema::dropIfExists('property_informations');
    }
};

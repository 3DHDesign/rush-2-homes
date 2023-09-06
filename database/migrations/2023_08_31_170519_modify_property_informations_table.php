<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('property_informations', function (Blueprint $table) {
            $table->string('price_type')->nullable();
            $table->string('size_type')->nullable();
            $table->renameColumn('sqft', 'land_size');
        });
    }

    public function down()
    {
        Schema::table('property_informations', function (Blueprint $table) {
            $table->dropColumn(['price_type', 'size_type']);
            $table->renameColumn('land_size', 'sqft');
        });
    }
};

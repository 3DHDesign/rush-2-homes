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
        Schema::table('property_informations', function (Blueprint $table) {
            $table
                ->foreign('property_type_id')
                ->references('id')
                ->on('property_types')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('property_category_id')
                ->references('id')
                ->on('property_categories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('district_id')
                ->references('id')
                ->on('districts')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('province_id')
                ->references('id')
                ->on('provinces')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('agent_id')
                ->references('id')
                ->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('property_informations', function (Blueprint $table) {
            $table->dropForeign(['property_type_id']);
            $table->dropForeign(['property_category_id']);
            $table->dropForeign(['city_id']);
            $table->dropForeign(['district_id']);
        });
    }
};

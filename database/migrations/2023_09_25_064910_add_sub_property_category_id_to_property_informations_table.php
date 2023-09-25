<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('property_informations', function (Blueprint $table) {
            $table->unsignedBigInteger('sub_property_category_id')->nullable();
            $table
                ->foreign('sub_property_category_id')
                ->references('id')
                ->on('sub_property_categories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('property_informations', function (Blueprint $table) {
            $table->dropForeign(['sub_property_category_id']);
            $table->dropColumn('sub_property_category_id');
        });
    }
};

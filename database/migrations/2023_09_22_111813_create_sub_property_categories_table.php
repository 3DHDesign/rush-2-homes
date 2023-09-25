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
        Schema::create('sub_property_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_category_id');
            $table->mediumText('en_name');
            $table->mediumText('si_name')->nullable();
            $table->mediumText('ta_name')->nullable();
            $table->timestamps();

            $table->foreign('property_category_id')
                ->references('id')
                ->on('property_categories')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_property_categories');
    }
};

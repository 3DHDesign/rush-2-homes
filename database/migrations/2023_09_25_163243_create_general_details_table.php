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
        Schema::create('general_details', function (Blueprint $table) {
            $table->id();
            $table->string('en_address_lk')->nullable();
            $table->string('si_address_lk')->nullable();
            $table->string('ta_address_lk')->nullable();
            $table->string('en_address_uae')->nullable();
            $table->string('si_address_uae')->nullable();
            $table->string('ta_address_uae')->nullable();
            $table->string('contact_number_lk')->nullable();
            $table->string('contact_number_uae')->nullable();
            $table->string('email_uae')->nullable();
            $table->string('email_lk')->nullable();
            $table->string('en_short_about')->nullable();
            $table->string('si_short_about')->nullable();
            $table->string('ta_short_about')->nullable();
            $table->boolean('maintain_mode')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_details');
    }
};

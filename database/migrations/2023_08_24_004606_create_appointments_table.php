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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_package_id');
            $table->unsignedBigInteger('business_hours_id');
            $table->date('date');
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('phone', 50);
            $table->text('message')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('product_package_id')->references('id')->on('product_package')->onDelete('no action');
            $table->foreign('business_hours_id')->references('id')->on('business_hours')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};

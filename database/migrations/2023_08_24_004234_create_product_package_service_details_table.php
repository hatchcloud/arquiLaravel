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
        Schema::create('product_package_service_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_package_id');
            $table->unsignedBigInteger('service_detail_id');
            $table->timestamps();
            $table->foreign('product_package_id')->references('id')->on('product_package')->onDelete('no action');
            $table->foreign('service_detail_id')->references('id')->on('service_details')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_package_service_details');
    }
};

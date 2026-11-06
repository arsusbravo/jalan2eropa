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
        Schema::create('hotels_no_countries', function (Blueprint $table) {
            $table->id();
            $table->integer('country_id')->default(0);
            $table->string('name', 100);
            $table->string('hcode', 100);
            $table->integer('stars');
            $table->string('type', 100)->default('hotel');
            $table->mediumText('address');
            $table->string('country', 2);
            $table->string('latitude', 20);
            $table->string('langitude', 20);
            $table->mediumText('descriptions');
            $table->mediumText('desc_indo');
            $table->string('affiliate_link');
            $table->mediumText('pic');
            $table->unsignedInteger('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels_no_countries');
    }
};

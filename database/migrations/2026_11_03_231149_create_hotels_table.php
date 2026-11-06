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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained()->cascadeOnDelete();
            $table->string('name', 100);
            $table->string('hcode', 100);
            $table->double('stars', 5, 2);
            $table->double('rates_average', 8, 2)->default(0);
            $table->double('rates_from', 8, 2)->default(0);
            $table->string('type', 100)->default('hotel');
            $table->mediumText('address');
            $table->string('latitude', 20);
            $table->string('longitude', 20);
            $table->mediumText('descriptions');
            $table->mediumText('desc_indo');
            $table->integer('numberrooms')->default(0);
            $table->integer('numberfloors')->default(0);
            $table->string('affiliate_link');
            $table->mediumText('pic');
            $table->unsignedInteger('views')->default(0);
            $table->tinyInteger('special')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};

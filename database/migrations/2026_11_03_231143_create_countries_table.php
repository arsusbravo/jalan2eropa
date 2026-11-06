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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('title');
            $table->string('slug', 100)->unique();
            $table->string('international', 100);
            $table->string('codes', 5);
            $table->string('latitude', 15);
            $table->string('longitude', 15);
            $table->mediumText('keywords');
            $table->mediumText('description');
            $table->mediumText('short_desc');
            $table->mediumText('to_see');
            $table->mediumText('eatdrink');
            $table->mediumText('shopping');
            $table->mediumText('others');
            $table->unsignedInteger('views')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};

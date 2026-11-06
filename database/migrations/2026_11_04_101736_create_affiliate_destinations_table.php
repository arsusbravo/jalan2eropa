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
        Schema::create('affiliate_destinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('affiliate_id')->constrained()->cascadeOnDelete();
            $table->foreignId('country_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('city_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('category', 30);
            $table->string('kind', 20)->default('city');
            $table->string('label', 100)->nullable();
            $table->unsignedSmallInteger('sort')->default(100);
            $table->string('query', 150)->nullable();
            $table->text('url')->nullable();
            $table->timestamps();

            $table->index(['affiliate_id', 'category']);
            $table->index(['country_id', 'kind']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_destinations');
    }
};

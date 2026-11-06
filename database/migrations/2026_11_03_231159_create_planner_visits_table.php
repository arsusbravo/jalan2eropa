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
        Schema::create('planner_visits', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->foreignId('route_id')->nullable()->constrained('planner_route')->cascadeOnDelete();
            $table->dateTime('visit_time')->nullable();
            $table->foreignId('place_id')->nullable()->constrained('cities')->nullOnDelete();
            $table->mediumText('address')->nullable();
            $table->integer('distance')->nullable();
            $table->integer('duration')->nullable();
            $table->string('type', 50)->nullable();
            $table->string('latitude', 50)->nullable();
            $table->string('longitude', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planner_visits');
    }
};

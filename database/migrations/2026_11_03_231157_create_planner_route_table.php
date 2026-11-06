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
        Schema::create('planner_route', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable();
            $table->foreignId('planner_id')->nullable()->constrained('planner')->cascadeOnDelete();
            $table->integer('day')->nullable();
            $table->dateTime('date_in')->nullable();
            $table->foreignId('stay_in')->nullable()->constrained('planner_stays')->nullOnDelete();
            $table->boolean('first_day')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planner_route');
    }
};

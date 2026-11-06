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
        Schema::table('affiliates', function (Blueprint $table) {
            $table->json('categories')->nullable()->after('slug');
            $table->text('search_template')->nullable()->after('url');
            $table->text('hotel_search_template')->nullable()->after('search_template');
            $table->string('description')->nullable()->after('hotel_search_template');
            $table->boolean('active')->default(false)->after('description');
            $table->unsignedSmallInteger('sort')->default(100)->after('active');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('affiliates', function (Blueprint $table) {
            $table->dropColumn(['categories', 'search_template', 'hotel_search_template', 'description', 'active', 'sort']);
        });
    }
};

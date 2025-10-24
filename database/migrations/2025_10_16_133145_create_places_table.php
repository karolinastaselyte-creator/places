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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            $table->text(column: 'description');
            $table->text(column: 'big_description');
            $table->string(column: 'corednets');
            $table->string(column: 'rating'); //?????
            $table->foreignId(column: 'country_id')->references(column: 'id')->on(table: 'countries');
            $table->foreignId(column: 'categories_id')->references(column: 'id')->on(table: 'categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};

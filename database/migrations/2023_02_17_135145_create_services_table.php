<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Domain\Product\Models\ServiceCategory;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->text('content')->nullable();
            $table->text('images')->nullable();
            $table->integer('sort')->default(500)->nullable();
            $table->boolean('status')->default(true);
            $table->foreignIdFor(ServiceCategory::class)
                    ->nullable()
                    ->constrained()
                    ->onUpdate('cascade')
                    ->nullOnDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('development_types');
    }
};

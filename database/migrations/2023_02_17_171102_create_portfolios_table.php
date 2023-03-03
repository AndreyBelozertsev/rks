<?php

use Illuminate\Support\Facades\Schema;
use Domain\Case\Models\PortfolioCategory;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->text('images')->nullable();
            $table->text('description')->nullable();
            $table->text('service_description')->nullable();
            $table->text('result')->nullable();
            $table->text('techology')->nullable();
            $table->string('branch')->nullable();
            $table->text('content')->nullable();
            $table->integer('sort')->default(500)->nullable();
            $table->foreignIdFor(PortfolioCategory::class)
                    ->nullable()
                    ->constrained()
                    ->onUpdate('cascade')
                    ->nullOnDelete('cascade');
            $table->boolean('status')->default(true);
            $table->string('view')->default('default');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};

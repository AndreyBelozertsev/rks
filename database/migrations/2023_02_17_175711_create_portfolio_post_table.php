<?php

use Domain\Post\Models\Post;
use Domain\Case\Models\Portfolio;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('portfolio_post', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Portfolio::class)
                    ->constrained();
            $table->foreignIdFor(Post::class)
                    ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_post');
    }
};

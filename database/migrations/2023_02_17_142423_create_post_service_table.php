<?php

use Domain\Post\Models\Post;
use Domain\Product\Models\Service;
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
        Schema::create('post_service', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Post::class)
                    ->constrained();
            $table->foreignIdFor(Service::class)
                    ->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_service');
    }
};

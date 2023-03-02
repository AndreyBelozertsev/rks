<?php

use Domain\Product\Models\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Domain\Product\Models\AdditionalService;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('additional_service_service', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(AdditionalService::class)
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
        Schema::dropIfExists('additional_service_service');
    }
};

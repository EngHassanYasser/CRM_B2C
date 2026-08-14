<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pipeline_stages', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pipeline_id')
                ->constrained('pipelines')
                ->restrictOnDelete();

            $table->string('name', 100);

            $table->unsignedInteger('sort_order');

            $table->unsignedTinyInteger('probability')->default(0);

            $table->boolean('is_closed')->default(false);
            $table->boolean('is_won')->default(false);

            $table->timestamps();

            $table->unique(
                ['pipeline_id', 'name'],
                'pipeline_stages_pipeline_name_unique'
            );

            $table->unique(
                ['pipeline_id', 'sort_order'],
                'pipeline_stages_pipeline_order_unique'
            );

            $table->index(['pipeline_id', 'is_closed']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pipeline_stages');
    }
};
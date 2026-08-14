<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('deals', function (Blueprint $table) {
            $table->id();

            $table->string('name', 255);

            $table->foreignId('lead_id')
                ->nullable()
                ->constrained('leads')
                ->nullOnDelete();

            $table->foreignId('owner_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->foreignId('pipeline_id')
                ->constrained('pipelines')
                ->restrictOnDelete();

            $table->foreignId('pipeline_stage_id')
                ->constrained('pipeline_stages')
                ->restrictOnDelete();

            $table->decimal('value', 15, 2)->default(0);

            $table->char('currency', 3)->default('USD');

            $table->date('expected_close_date')->nullable();

            $table->timestamp('won_at')->nullable();
            $table->timestamp('lost_at')->nullable();

            $table->timestamps();

            $table->index([
                'pipeline_id',
                'pipeline_stage_id',
            ]);

            $table->index([
                'owner_id',
                'created_at',
            ]);

            $table->index('expected_close_date');

            $table->index([
                'lead_id',
                'created_at',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('deals');
    }
};
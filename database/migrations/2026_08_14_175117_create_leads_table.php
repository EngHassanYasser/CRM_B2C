<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();

            $table->string('first_name', 100);
            $table->string('last_name', 100)->nullable();

            $table->string('email', 255)->nullable();
            $table->string('phone', 50)->nullable();

            $table->string('job_title', 150)->nullable();
            $table->string('company_name', 255)->nullable();

            $table->foreignId('lead_source_id')
                ->constrained('lead_sources')
                ->restrictOnDelete();

            $table->foreignId('lead_status_id')
                ->constrained('lead_statuses')
                ->restrictOnDelete();

            $table->foreignId('owner_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->unsignedSmallInteger('score')->default(0);

            $table->timestamps();

            $table->index('email');
            $table->index('phone');

            $table->index([
                'owner_id',
                'lead_status_id',
            ]);

            $table->index([
                'lead_source_id',
                'created_at',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
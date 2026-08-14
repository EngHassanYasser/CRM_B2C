<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('assigned_to')
                ->constrained('users')
                ->restrictOnDelete();

            $table->string('title', 255);
            $table->text('description')->nullable();

            $table->string('priority', 20)->default('normal');
            $table->string('status', 20)->default('pending');

            $table->timestamp('due_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            $table->string('taskable_type', 100);
            $table->unsignedBigInteger('taskable_id');

            $table->timestamps();

            $table->index(
                ['taskable_type', 'taskable_id'],
                'tasks_taskable_index'
            );

            $table->index([
                'assigned_to',
                'status',
                'due_at',
            ]);

            $table->index('due_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
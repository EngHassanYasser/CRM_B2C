<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained('users')
                ->restrictOnDelete();

            $table->string('type', 50);
            $table->string('subject', 255);
            $table->text('description')->nullable();

            $table->string('activityable_type', 100);
            $table->unsignedBigInteger('activityable_id');

            $table->timestamp('occurred_at');

            $table->timestamps();

            $table->index(
                ['activityable_type', 'activityable_id'],
                'activities_activityable_index'
            );

            $table->index([
                'user_id',
                'occurred_at',
            ]);

            $table->index([
                'type',
                'occurred_at',
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('activities');
    }
};
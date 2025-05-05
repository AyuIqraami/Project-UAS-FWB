<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'guide', 'user']);
            $table->string('photo')->nullable();
            $table->timestamps();
        });

        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guide_id')->constrained('users')->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->decimal('price', 10, 2);
            $table->string('photo');
            $table->integer('quota');
            $table->timestamps();
        });

        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->date('booking_date');
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled']);
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tour_id')->constrained('tours')->onDelete('cascade');
            $table->integer('rating');
            $table->text('komen');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('bookings');
        Schema::dropIfExists('tours');
        Schema::dropIfExists('users');
    }
};

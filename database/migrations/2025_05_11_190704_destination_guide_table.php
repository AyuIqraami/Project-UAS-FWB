<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('destination_guide', function (Blueprint $table) {
        $table->id();
        $table->foreignId('guide_id')->constrained('guides')->onDelete('cascade');
        $table->foreignId('destination_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}
public function down()
{
    Schema::dropIfExists('destination_guide');
}
};
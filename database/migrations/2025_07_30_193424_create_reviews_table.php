<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id("review_id");
            $table->decimal("review_rating", 2, 1);
            $table->text("review_comment");
            $table->timestamps();
            $table->foreignId("user_fk")
                ->constrained("users")->cascadeOnDelete();
            $table->foreignId("product_fk")
                ->constrained("products")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

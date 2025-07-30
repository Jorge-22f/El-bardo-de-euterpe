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
        Schema::create('orders_details', function (Blueprint $table) {
            $table->id();
            $table->integer("order_details_quantity");
            $table->decimal("order_details_unit_price", 8, 2);
            $table->decimal("order_details_subtotal", 10, 2);
            $table->foreignId("order_fk")
                ->constrained("orders")->cascadeOnDelete();
            $table->foreignId("product_fk")
                ->constrained("products")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders_details');
    }
};

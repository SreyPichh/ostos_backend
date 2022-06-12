<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->string('supplier')->nullable();
            $table->string('supplier_invoice_number')->unique()->nullable();
            $table->timestamp('date')->nullable();
            $table->enum('status', ['Paid', 'Unpaid', 'Partial Billed'])->nullable();
            $table->string('phone_number')->nullable();
            $table->longText('address')->nullable();
            $table->longText('supplier_product_data')->nullable();
            $table->longText('note')->nullable();
            $table->double('due_amount')->nullable();
            $table->double('total')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
}

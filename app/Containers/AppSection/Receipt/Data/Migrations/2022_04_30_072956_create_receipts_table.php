<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('receipts', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('customer_id')->nullable();
            $table->string('receipt_number')->nullable();
            $table->timestamp('date')->nullable();
            $table->string('paymentOf')->nullable();
            $table->double('amount')->nullable();
            $table->enum('type', ['cash', 'cheque', 'eBanking'])->nullable();
            $table->string('no')->nullable();
            $table->longText('customer_info')->nullable();
            $table->boolean('signature')->nullable();
            $table->unsignedInteger('business_id')->nullable();
            $table->enum('status', ['Paid', 'Unpaid', 'Partial Billed'])->nullable();
            $table->string('receipt_note')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('receipts');
    }
}

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
            $table->timestamp('date')->nullable();
            $table->string('paymentOf')->nullable();
            $table->double('amount')->nullable();
            $table->enum('type', ['Cash', 'Cheque'])->nullable();
            $table->string('no')->nullable();
            $table->longText('customer_info')->nullable();
            $table->boolean('signature')->nullable();
            $table->timestamps();
            $table->softDeletes();
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

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
            $table->string('received_from')->nullable();
            $table->string('sumOf')->nullable();
            $table->string('paymentOf')->nullable();
            $table->double('amount')->nullable();
            $table->enum('type', ['cash', 'cheque'])->nullable();
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

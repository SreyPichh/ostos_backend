<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuotesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('business_id')->nullable();
            $table->unsignedInteger('customer_id')->nullable();
            $table->string('quote_number')->unique()->nullable();
            $table->string('po')->nullable();
            $table->timestamp('date')->nullable();
            $table->double('due_amount')->nullable();
            $table->longText('employee_data')->nullable();
            $table->longText('product_data')->nullable();
            $table->longText('sample_img')->nullable();
            $table->string('quote_note')->nullable();
            $table->boolean('signature')->nullable();
            $table->enum('status', ['Paid', 'Unpaid', 'Partial Billed'])->nullable();
            $table->double('total')->nullable();
            $table->longText('customer_info')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('set null');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quotes');
    }
}

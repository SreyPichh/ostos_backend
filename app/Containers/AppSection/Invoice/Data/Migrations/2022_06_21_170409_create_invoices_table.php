<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('business_id')->nullable();
            $table->unsignedInteger('customer_id')->nullable();
            $table->string('invoice_number')->unique()->nullable();
            $table->timestamp('date')->nullable();
            $table->double('due_amount')->nullable();
            $table->longText('employee_data')->nullable();
            $table->longText('product_data')->nullable();
            $table->longText('sample_img')->nullable();
            $table->string('invoice_note')->nullable();
            $table->boolean('signature')->nullable();
            $table->enum('status', ['Paid', 'Unpaid', 'Partial Billed'])->nullable();
            $table->double('total')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('set null');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('set null');
            //onDelete = when we delete user id ? the invoice belong to id ? will auto delete
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
}

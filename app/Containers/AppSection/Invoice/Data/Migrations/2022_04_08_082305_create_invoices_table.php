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
            $table->string('invoice_number')->unique()->nullable();
            $table->timestamp('date')->nullable();
            $table->double('due_amount')->nullable();
            $table->longText('employee_data')->nullable();
            $table->unsignedInteger('business_id')->nullable();
            $table->longText('product_data')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_phone_number')->nullable();
            $table->string('customer_phone_number_2')->nullable();
            $table->string('customer_address1')->nullable();
            $table->string('customer_address2')->nullable();
            $table->longText('sample_img')->nullable();
            $table->string('invoice_note')->nullable();
            $table->boolean('signature')->nullable();
            $table->enum('status', ['paid', 'unpaid', 'partial_billed'])->nullable();
            $table->double('total')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
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

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
            $table->string('quote_number')->unique()->nullable();
            $table->timestamp('date')->nullable();
            $table->double('due_amount')->nullable();
            $table->unsignedInteger('business_id')->nullable();
            $table->longText('product_data')->nullable();
            $table->longText('po')->nullable();
            $table->longText('sample_img')->nullable();
            $table->boolean('signature')->nullable();
            $table->enum('status', ['Paid', 'Unpaid', 'Partial Billed'])->nullable();
            $table->double('total')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('business_id')->references('id')->on('businesses')->onDelete('cascade');
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

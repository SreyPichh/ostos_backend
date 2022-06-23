<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name')->nullable();
            $table->string('customer_company')->nullable();
            $table->string('po')->nullable();
            $table->string('customer_email')->nullable();
            $table->string('customer_phone_number')->nullable();
            $table->string('customer_phone_number_2')->nullable();
            $table->enum('gender', ['Male','Female','Other'])->nullable();
            $table->string('customer_address1')->nullable();
            $table->string('customer_address2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
}

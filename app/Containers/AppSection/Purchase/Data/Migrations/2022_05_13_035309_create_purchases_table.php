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
            $table->longText('description')->nullable();
            $table->double('total_unit')->nullable();
            $table->enum('status', ['Paid', 'Unpaid', 'Partial Bill'])->nullable();
            $table->double('total')->nullable();
            $table->timestamps();
            //$table->softDeletes();
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

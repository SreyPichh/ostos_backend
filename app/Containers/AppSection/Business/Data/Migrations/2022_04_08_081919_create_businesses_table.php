<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('logo')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number1')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('phone_number3')->nullable();
            $table->string('email')->nullable();
            $table->string('telegram')->nullable();
            $table->string('aba_name')->nullable();
            $table->string('acc_number')->nullable();
            $table->longText('qr_code')->nullable();
            $table->longText('invoice_toptext')->nullable();
            $table->longText('invoice_note')->nullable();
            $table->longText('digital_sign')->nullable();
            $table->longText('facebook_link')->nullable();
            $table->longText('instagram_link')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
}

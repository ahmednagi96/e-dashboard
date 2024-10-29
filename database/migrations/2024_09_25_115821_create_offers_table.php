<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('offers', function (Blueprint $table) {
            //title description image original_price discounted_price currency link
             $table->id();
            $table->string('title'); // عنوان العرض
            $table->text('description'); // وصف العرض
            $table->string('image')->nullable(); // صورة العرض
            $table->decimal('original_price', 8, 2); // السعر قبل الخصم
            $table->decimal('discounted_price', 8, 2); // السعر بعد الخصم
            $table->string('currency', 3)->default('SR'); // نوع العملة (3 أحرف مثل USD, EUR, etc.)
            $table->string('link'); // رابط العرض
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};

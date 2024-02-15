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
        // Schema::create('product', function (Blueprint $table) {
        //     $table->unsignedBigInteger("product_code")->nullable()->unsigned()->length(10);
        //     $table->string("name_product", 255)->nullable();
        //     $table->text("details")->nullable();
        //     $table->decimal("price", 10, 2)->nullable();
        //     $table->integer("remaining_amount")->nullable();
        // });
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedBigInteger("product_code")->nullable();
            $table->string("name_product", 255)->nullable();
            $table->text("details")->nullable();
            $table->decimal("price", 10, 2)->nullable();
            $table->integer("remaining_amount")->nullable();
            // $table->timestamps(); 
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

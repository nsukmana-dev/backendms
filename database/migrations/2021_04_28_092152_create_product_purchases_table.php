<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('sort');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->datetime('modified_at');
            $table->string('creator_id');
            $table->string('modifier_id');
            $table->string('product_id');
            $table->string('purchase_id');
            $table->string('product_purchase_code');
            $table->string('person_id');
            $table->string('currency_id');
            $table->float('value', 16, 4);
            $table->float('price', 16, 4);
            $table->integer('quantity');
            $table->datetime('effective_date');
            $table->datetime('expire_date');
            $table->string('given_by');
            $table->datetime('given_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_purchases');
    }
}

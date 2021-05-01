<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPurchaseVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_purchase_vouchers', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('sort');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->datetime('modified_at');
            $table->string('creator_id');
            $table->string('modifier_id');
            $table->string('product_purchase_id');
            $table->string('voucher_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_purchase_vouchers');
    }
}

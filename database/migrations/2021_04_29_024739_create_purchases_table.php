<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('sort');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->datetime('modified_at');
            $table->string('purchase_code');
            $table->integer('purchase_status');
            $table->string('person_id');
            $table->string('inquiry_id');
            $table->string('currency_id');
            $table->float('amount', 16, 4);
            $table->string('payment_type_id');
            $table->integer('is_paid');
            $table->string('payment_reference_number');
            $table->datetime('payment_date');
            $table->string('payment_file_name');
            $table->string('referral_source_id');
            $table->text('comment');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchases');
    }
}

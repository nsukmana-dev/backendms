<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('sort');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->datetime('modified_at');
            $table->string('creator_id');
            $table->string('modifier_id');
            $table->string('voucher_code');
            $table->string('voucher_name');
            $table->integer('voucher_status');
            $table->string('voucher_type_id');
            $table->string('currency_id');
            $table->float('value', 16, 4);
            $table->datetime('effective_date');
            $table->datetime('expire_date');
            $table->integer('is_used');
            $table->datetime('used_at');
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
        Schema::dropIfExists('vouchers');
    }
}

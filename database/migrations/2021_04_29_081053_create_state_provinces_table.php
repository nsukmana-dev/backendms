<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('state_provinces', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('sort');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->datetime('modified_at');
            $table->string('creator_id');
            $table->string('modifier_id');
            $table->string('state_province_code');
            $table->string('state_province_name');
            $table->string('country_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('state_provinces');
    }
}

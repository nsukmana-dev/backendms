<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('sort');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->datetime('modified_at');
            $table->string('creator_id');
            $table->string('modifier_id');
            $table->string('name_prefix_id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->datetime('birth_date');
            $table->string('gender_id');
            $table->string('religion_id');
            $table->string('address_line');
            $table->string('city_id');
            $table->string('country_id');
            $table->string('postal_code');
            $table->string('state_province_id');
            $table->string('email');
            $table->string('mobile_number');
            $table->string('phone_number');
            $table->string('national_identity_number');
            $table->string('company');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}

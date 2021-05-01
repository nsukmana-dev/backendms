<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('sort');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->datetime('modified_at');
            $table->string('program_name');
            $table->text('terms_and_conditions');
            $table->text('privacy_policy');
            $table->text('description');
            $table->string('from_email');
            $table->string('from_email_display');
            $table->string('to_email');
            $table->string('to_email_display');
            $table->integer('maximum_session_age');
            $table->integer('maximum_session_persistence_age');
            $table->integer('maximum_password_age');
            $table->integer('password_expiry_notice_period');
            $table->integer('maximum_reset_password_age');
            $table->integer('user_activation_notice_period');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}

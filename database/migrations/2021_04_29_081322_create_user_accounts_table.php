<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('status');
            $table->integer('sort');
            $table->datetime('created_at')->default(DB::raw('CURRENT_TIMESTAMP(0)'));
            $table->datetime('modified_at');
            $table->string('creator_id');
            $table->string('modifier_id');
            $table->string('login');
            $table->integer('is_internal');
            $table->string('person_id');
            $table->string('password');
            $table->string('salt');
            $table->datetime('password_expiration');
            $table->string('member_number');
            $table->string('access_code');
            $table->string('activation_code');
            $table->datetime('activation_expiration');
            $table->integer('is_activated');
            $table->datetime('activated_at');
            $table->string('persist_code');
            $table->datetime('session_persistence_expiration');
            $table->string('reset_password_code');
            $table->datetime('reset_password_expiration');
            $table->integer('is_superuser');
            $table->string('user_type_id');
            $table->string('user_profile_file_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_accounts');
    }
}

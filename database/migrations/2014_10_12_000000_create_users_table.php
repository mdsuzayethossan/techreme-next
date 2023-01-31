<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('custom_id', 8)->nullable();
            $table->string('name');
            $table->string('com_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('mobile')->nullable();
            $table->string('telephone')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('mailing_address')->nullable();
            $table->string('biz_address')->nullable();
            $table->string('biz_url')->nullable();
            $table->enum('biz_type', ['individual', 'small', 'medium', 'large','trading'])->nullable();
            $table->enum('user_type', ['admin', 'manager', 'supervisor', 'operator', 'client', 'dealer'])->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->string('image')->nullable();
            $table->string('creator')->nullable();
            $table->string('updater')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

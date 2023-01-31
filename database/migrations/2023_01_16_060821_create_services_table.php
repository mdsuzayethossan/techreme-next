<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('custom_id', 8)->nullable();
            $table->string('name')->unique();
            $table->string('category')->nullable();
            $table->string('version')->nullable();
            $table->string('description')->nullable();
            $table->string('requirement')->nullable();
            $table->string('customize_scope')->nullable();
            $table->string('privilege')->nullable();
            $table->string('opportunity')->nullable();
            $table->string('renew_date')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('image')->nullable();
            $table->enum('service_type', ['gift', 'loyalty_card', 'silver', 'gold', 'platinum', 'diamond', 'premium'])->nullable();
            $table->enum('status', ['active', 'inactive'])->nullable();
            $table->string('creator')->nullable();
            $table->string('updater')->nullable();
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
        Schema::dropIfExists('services');
    }
}

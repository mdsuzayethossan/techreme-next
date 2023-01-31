<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->id();
            $table->string('owner_name')->unique();
            $table->string('product_name')->nullable();
            $table->string('service_name')->nullable();
            $table->string('started_from')->nullable();
            $table->string('expiry_date')->nullable();
            $table->string('renew_date')->nullable();
            $table->longText('description')->nullable();
            $table->enum('agreement_type', ['long_term', 'short_term', 'yearly', 'customize', 'others'])->nullable();
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
        Schema::dropIfExists('owners');
    }
}

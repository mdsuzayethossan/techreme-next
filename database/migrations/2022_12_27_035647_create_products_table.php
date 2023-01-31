<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('custom_id', 8)->nullable();
            $table->string('name')->unique();
            $table->string('category')->nullable();
            $table->string('version')->nullable();
            $table->string('description')->nullable();
            $table->string('requirement')->nullable();
            $table->string('customize_scope')->nullable();
            $table->string('upgradation_scope')->nullable();
            $table->string('image')->nullable();
            $table->enum('biz_type', ['small', 'medium', 'large'])->nullable();
            $table->enum('soft_type', ['erp', 'ecommerce', 'inventory', 'pos', 'mobile_app', 'pay_role'])->nullable();
            $table->enum('db_type', ['mysql', 'oracle', 'mongodb', 'cassandra', 'sqlite', 'mariadb'])->nullable();
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
        Schema::dropIfExists('products');
    }
}

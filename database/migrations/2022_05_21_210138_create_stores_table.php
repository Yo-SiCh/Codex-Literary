<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->nullable(false);
            $table->string('cover')->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('author')->nullable(false);
            $table->string('category')->nullable(false);
            $table->integer('quantity')->nullable(false);
            $table->foreignId('users_id')->nullable(false)->constrained()->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('stores');
    }
};

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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('description',255);
            
            $table->foreignId('bebida_id')->references('id')
            ->on('bebidas')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('empanada_id')->references('id')
            ->on('empanadas')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('pizza_id')->references('id')
            ->on('pizzas')->onDelete('cascade')->onUpdate('cascade');

            $table->foreignId('postre_id')->references('id')
            ->on('postres')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('pedidos');
    }
};

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
        Schema::create('educational_plans', function (Blueprint $table) {
            $table->id();
            $table->string('network');
            $table->longText('details');
            $table->string('modify_prices')->default('no');
            $table->string('price_alteration_option')->default('percentage');
            $table->decimal('percentage', 20, 2)->default(0.00);
            $table->decimal('added_amount', 20, 2)->default(0.00);
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
        Schema::dropIfExists('educational_plans');
    }
};

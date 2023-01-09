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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('name_address')->nullable()->default('address_');
            $table->string('company')->nullable();
            $table->text('address')->nullable(false);
            $table->string('additional')->nullable();
            $table->string('zipcode')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('country')->nullable(false);
            $table->foreignId('user_id')->nullable()->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('addresses');
    }
};

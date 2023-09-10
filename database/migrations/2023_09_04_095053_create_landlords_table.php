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
        Schema::create('landlords', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->nullable();
            $table->string('name_bn');
            $table->string('father_name');
            $table->string('husband_name')->nullable();
            $table->string('dob');
            $table->text('address');
            $table->string('flat_no')->default('00');
            $table->string('ownership')->default('L');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('nid')->unique();
            $table->string('birth_cer')->unique()->nullable();
            $table->string('holding_type')->nullable();
            $table->string('status')->default(1);
            $table->string('code')->nullable();
            $table->string('ward_no');
            $table->string('holding_no');
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
        Schema::dropIfExists('landlords');
    }
};

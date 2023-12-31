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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id();
            $table->string('holding_no');
            $table->string('flat_no')->default('00');
            $table->string('dob');
            $table->string('nid');
            $table->string('birth_cer')->nullable();
            $table->string('name_en');
            $table->string('name_bn')->nullable();
            $table->string('father_name');
            $table->string('ward_no')->nullable();
            $table->string('mobile_no');
            $table->string('email')->nullable();
            $table->text('address');
            $table->text('education');
            $table->string('volunteer_id')->nullable();
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
        Schema::dropIfExists('volunteers');
    }
};

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
        Schema::create('workdomain_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contract_id');
            $table->string('service_name_en');
            $table->string('service_name_ar');
            $table->float('service_cost_en');
            $table->float('service_cost_ar');
            $table->longText('service_desc_en');
            $table->longText('service_desc_ar');





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
        Schema::dropIfExists('workdomain_fees');
    }
};

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
        Schema::table('contracts', function (Blueprint $table) {

            //
            $table->string('contract_reft_number');
            $table->string('contract_type');
            $table->string('introduced_to_ar');
            $table->string('introduced_to_en');
            $table->string('client_country');
            $table->date('agreement_date_ar');
            $table->date('agreement_date_en');
            $table->string('client_name_ar');
            $table->string('client_address_en');
            $table->string('client_address_ar');
            $table->integer('duration');
            $table->string('sign_second_party');
            $table->string('sign_second_party_mister');
            $table->date('contract_date_ar');
            $table->date('contract_date_en');









        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contracts', function (Blueprint $table) {
            //
        });
    }
};

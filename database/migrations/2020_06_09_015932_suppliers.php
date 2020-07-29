<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Suppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('supplier_id');
            $table->string('supplier_company_name');
            $table->string('name_of_contact_person');
            $table->integer('supplier_contact_number');
            $table->string('supplier_email');
            $table->string('supplier_address');
            $table->string('number_of_employees_hired');
            $table->date('hired_date');
            $table->string('additional_remarks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WarrantiesNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranties_new', function (Blueprint $table) {
            $table->increments('warranty_id');

            $table->integer('project_id');
            $table->string('project_details');
            $table->date('project_end_date');

            $table->integer('customer_id');
            $table->string('company_name');
            $table->string('customer_name');
            $table->integer('contact_number');
            $table->string('email');
            
            $table->date('warranty_start_date');
            $table->date('warranty_end_date');
            $table->integer('machine_hours');
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

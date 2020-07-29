<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Warranties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warranties', function (Blueprint $table) {
            $table->increments('warranty_id');
            $table->foreign('warranty_id')->references('project_id')->on('projects');
           
            $table->string('project_name');
            $table->date('project_end_date');

            $table->integer('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customers');

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

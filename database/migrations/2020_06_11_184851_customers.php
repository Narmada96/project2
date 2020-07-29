<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customer_id');
            $table->string('name_of_contact_person');
            $table->string('nic_of_contact_person');
            $table->integer('contact_number');
            $table->string('designation');
            $table->string('company_address');
            $table->string('email');
            
            $table->bigInteger('project_id');
            $table->foreign('project_id')->references('project_id')->on('projects');

            $table->string('project_name');
            $table->string('project_location');
            $table->date('project_start_date');
            $table->date('estimated_project_end_date');

            $table->integer('warranty_id');
            $table->foreign('warranty_id')->references('id')->on('warranties');
            $table->string('warranty_details');

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

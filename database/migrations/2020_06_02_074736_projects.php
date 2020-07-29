<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('project_id');

            $table->string('project_type');
            $table->integer('project_type_id');
            $table->foreign('project_type_id')->references('id')->on('project_types');

            $table->string('project_name');

            $table->string('project_location');

            $table->integer('customer_id');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->string('customer_name');
            $table->integer('contact_number');
            $table->string('email');

            $table->date('project_start_date');
            $table->date('estimated_project_end_date');

            $table->integer('estimate_id');
            $table->foreign('estimate_id')->references('estimate_id')->on('estimates');
            $table->integer('quotation_id');
            $table->foreign('quotation_id')->references('quotation_id')->on('quotations');
            $table->integer('timeline_id');
            $table->foreign('timeline_id')->references('timeline_id')->on('timelines');
            $table->integer('employee_id');
            $table->foreign('employee_id')->references('employee_nic')->on('employees');
            $table->integer('labor_id');
            $table->foreign('labor_id')->references('labor_id')->on('labor');
            $table->integer('machine_id');
            $table->foreign('machine_id')->references('machine_id')->on('machines');
            $table->integer('supplier_id');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers');
            $table->integer('warranty_id');
            $table->foreign('warranty_id')->references('warranty_id')->on('warranties');
            $table->integer('expense_id');
            $table->foreign('expense_id')->references('expense_id')->on('expenses');

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

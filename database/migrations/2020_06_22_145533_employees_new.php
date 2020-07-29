<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmployeesNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees_new', function (Blueprint $table) {
            $table->string('employee_nic');
            $table->primary(['employee_nic']);

            $table->string('first_name');
            $table->string('last_name');

            $table->string('employee_type');
            $table->bigInteger('employee_type_id');
            $table->foreign('employee_type_id')->references('id')->on('project_types');

            $table->string('employee_category');
            $table->bigInteger('employee_category_id');
            $table->foreign('employee_category_id')->references('id')->on('employee_categories');

            $table->string('designation');
            $table->integer('employee_contact_number');
            $table->string('email');
            $table->boolean('employee_availability');

            $table->bigInteger('project_id');
            $table->foreign('project_id')->references('project_id')->on('projects');
            $table->string('project_name');
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

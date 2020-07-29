<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Labor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labor', function (Blueprint $table) {
            $table->string('labor_nic');
            $table->primary(['labor_nic']);

            $table->string('first_name');
            $table->string('last_name');

            $table->string('labor_type');
            $table->bigInteger('labor_type_id');
            $table->foreign('labor_type_id')->references('id')->on('project_types');

            $table->string('labor_category');
            $table->bigInteger('labor_category_id');
            $table->foreign('labor_category_id')->references('id')->on('employee_categories');

            $table->string('designation');
            $table->integer('labor_contact_number');
            $table->string('labor_availability');

            $table->date('labor_hired_date');
            $table->date('labor_end_date');

            $table->bigInteger('project_id');
            $table->foreign('labor_project_id')->references('project_id')->on('projects');
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Expenses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('expense_id');
            $table->foreign('expense_id')->references('project_id')->on('projects');
            $table->string('project_name');
            $table->string('project_location');
            $table->date('project_start_date');
            $table->date('estimated_project_end_date');
            $table->decimal('amount_given');
            $table->date('money_given_start_date');
            $table->date('money_given_end_date');
            $table->decimal('amount_spent');
            $table->decimal('amount_leftover');

            $table->integer('employee_id');
            $table->foreign('employee_id')->references('employee_nic')->on('employees');
            $table->string('given_person_name');
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

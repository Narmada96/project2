<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExpensesNew extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses_new', function (Blueprint $table) {
            $table->increments('expense_id');

            $table->integer('project_id');
            $table->string('project_name');
            
            $table->date('money_given_start_date');
            $table->date('money_given_end_date');
            $table->decimal('amount_given');
            $table->decimal('amount_spent');
            $table->decimal('amount_leftover');

            $table->string('employee_nic');
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

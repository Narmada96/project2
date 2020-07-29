<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses_new';
    protected $primaryKey = 'expense_id';

    protected $casts = [
        'money_given__start_date' => 'date',
        'money_given_end_date' => 'date',
    ];

    public function project()
    {
        $this->hasMany('App\Project', 'project_id');
    }

    public function employee()
    {
        $this->hasMany('App\Employee', 'employee_nic');
    }



}

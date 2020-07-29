<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'project_id';

    protected $casts = [
        'project_start_date' => 'date',
        'estimated_project_end_date' => 'date',
    ];

    public function type()
    {
        $this->belongsTo('App\Type', 'id');
    } 

    public function customer()
    {
        $this->belongsTo('App\Customer', 'customer_id');
    }
    
    public function employee()
    {
        $this->hasMany('App\Employee', 'employee_nic');
    }

    public function warranty()
    {
        $this->hasMany('App\Warranty', 'warranty_id');
    }

    public function expense()
    {
        $this->belongsTo('App\Expense', 'expense_id');
    } 
    
    
}

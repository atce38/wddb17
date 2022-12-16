<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Employee extends Model
{
    use HasFactory;

    protected $fillable=['id','name','address','image','dtp_id'];

    protected $appends=['department_name','total_salary_paid'];

    public function getDepartmentNameAttribute()
    {
        $dpt=Department::find($this->dtp_id);
        if(!$dpt)
        {
            return;
        }
        return $dpt->name;
    }

    public function getTotalSalaryPaidAttribute()
    {
        // return Salary::where('emp_id',$this->id)->sum('amount');
       return DB::table('salaries')->where('emp_id',$this->id)->sum('amount');
    }

}

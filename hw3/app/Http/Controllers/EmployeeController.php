<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class EmployeeController extends Controller
{
    protected $names = [
        'Ivan',        
        'Sergey',
        'Nikolay',
        'Vladimir'
    ];

    public function __invoke()
    {
        for($i=0; $i<4; $i++) {
            $employee = new Employee();
            $employee->first_name = $this->names[$i];
            $employee->age = rand(20, 60);
            $employee->salary = rand(1, 3) * 1000000;
            $employee->save();
            echo "$employee->first_name" . ", возраст - " . "$employee->age" . ", зарплата - " . "{$employee->salary}";
            echo "<br />";            
        }        
    }
}

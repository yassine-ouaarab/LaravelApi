<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function getEmployees()
    {
        return Employee::all();
        //return response()->json(Employee::all,200);
    }

    public function getEmployeeById($id)
    {
        $employee = Employee::find($id);
            if(is_null($employee)) return null;
            else return $employee;
    }

    /*public function AddEmployee(Request $request)
    {
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->salary = $request->salary;
        $employee->save();
        return true;
    }*/

    public function AddEmployee(Request $request)
    {
        Employee::create($request->all());
        return true;
    }

    public function UpdateEmployee(Request $request,$id)
    {
        /*$employee = Employee::find($id);
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->salary = $request->salary;
        $employee->save();
        return true;*/

        // OR

        $employee = Employee::find($id);
        if(is_null($employee))
        {return null;}
        else
        {$employee -> update($request->all());
        return true;}

    }

    public function DeleteEmployee($id)
    {

        $employee = Employee::find($id);
        if(is_null($employee))
        {return null;}
        else
        {$employee -> delete();
        return true;}

    }
}


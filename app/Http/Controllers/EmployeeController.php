<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
class EmployeeController extends Controller
{
    public function create(){
        return view('employee.create');
    }
    public function store(Request $req){
        $name = $req->name;
        $email = $req->email;
        $birth_date = $req->birth_date;
        $department = $req->department;
        if($req->status){
            $status = 1;
        }
        else {
            $status = 0;
        }    
        $gender = $req->gender;
        $address = $req->address;

        // insert into employees table
        
        // Eloquent ORM
        // $obj = new Employee();  // create an object of Employee class
        // $obj->name = $name;
        // $obj->email = $email;
        // $obj->birth_date = $birth_date;
        // $obj->department = $department;
        // $obj->status = $status;
        // $obj->gender = $gender;
        // $obj->address = $address;
        // if($obj->save()){
        //     echo 'Inserted';
        // }
        // end of eloqunet ORM

        // Start of Query Builder 
        DB::table('employees')->insert([
            'name' => $name,
            'email' => $email,
            'birth_date' => $birth_date,
            'department'=> $department, 
            'status'=> $status, 
            'gender'=> $gender, 
            'address'=> $address
        ]);
        // End of Query Builder
    }
    public function all(){
        // SELECT * from employees
        $employees = Employee::all();
        return view('employee.all', compact('employees'));
    }
    public function edit($id){
        $employee = Employee::find($id); // SELECT * from employees WHERE id=1
        return view('employee.edit', compact('employee'));
    }
    public function update(Request $req, $id){
        $name = $req->name;
        $email = $req->email;
        $birth_date = $req->birth_date;
        $department = $req->department;
        if($req->status){
            $status = 1;
        }
        else {
            $status = 0;
        }    
        $gender = $req->gender;
        $address = $req->address;

        $obj = Employee::find($id);
        $obj->name = $name;
        $obj->email = $email;
        $obj->birth_date = $birth_date;
        $obj->department = $department;
        $obj->status = $status;
        $obj->gender = $gender;
        $obj->address = $address;
        if($obj->save()){
            return redirect('employees');
        }
    }

    public function delete($id){
        Employee::find($id)->delete();
        return redirect('/employees');
    }

}

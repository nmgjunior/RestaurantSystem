<?php

namespace App\Http\Controllers\Restaurants;

use Illuminate\Http\Request;

use App\Employee;

use App\Restaurant;

use App\Http\Controllers\Controller;

use App\Http\Middleware\VerifyAdminRest;

class EmployeeController extends Controller
{
    public function __construct()
    {
        $this->middleware('verify.login');
    }
   
    public function index()
    {
        $restaurant = session()->get('user');
        $restaurant=$restaurant['restaurant_id'];

        $employees = Employee::where('restaurant_id', $restaurant)->having('role','>','1')->get();

        return view('employees.index', compact('employees'));
    }

    
    public function create()
    {
        return view('employees.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $data['role'] = implode(',', $data['role']);

        $data['password']=bcrypt($data['password']);

        $user=session()->get('user');
        
        $restaurant = Restaurant::where('id', $user['restaurant_id'])->first();

        $restaurant= $restaurant->employees()->create($data);

        return redirect('/employee/index');

    }

  
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $employee=Employee::find($id);

        return view ('employees.edit', compact('employee'));

    }

    
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $employee = Employee::find($id);

        $employee->update($data);

        return redirect('/employee/index');
    }

    
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/employee/index'); 
    }
}

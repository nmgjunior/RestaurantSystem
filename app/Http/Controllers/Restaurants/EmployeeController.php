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
        $this->middleware('verify.admin.rest');
    }
   
    public function index()
    {
        $employees = Employee::all();

        return view('employees.index', compact('employees'));
    }

    
    public function create()
    {
        return view('employees.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        
        $restaurant = Restaurant::where('code', $data['restaurant_code'])->first();

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

    public function teste2()
    {
        $request=Request();
        $user = $request->session()->get('user');

        return $user;
    }
}

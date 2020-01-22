<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Employee;

class LoginController extends Controller
{
    public function __construct()
    {
        //$this->middleware('verify.login');
    }
    public function create()
    { 
        return view('admin.login');
    }
    public function store(Request $request)
    {

        $data=$request->all();

        if($userqty=Employee::where('code', $data['code'])->count()==0)
        {
            return redirect('/login');
        } 

        $user = Employee::where('code', $data['code'])->first();

        if (Hash::check($data['password'], $user['password']))
        {
            $sessiondata = Request();

            $sessiondata->session()->put('user', [
                'user_id' => $user['id'],
                'user_code' => $user['code'],
                'restaurant_id' => $user['restaurant_id'],
                'user_role' => $user['role'],
        ]);
            return redirect ('/employee/index');
        } else{
            return redirect('/login');
        }
    }

    public function destroy()
    {
        $request=Request();
        $request->session()->forget('user');
        return redirect('/login');
    }

}

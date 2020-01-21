<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;

class LoginController extends Controller
{
    public function create()
    {
        $request = Request();

        if ($request->session()->has('user')){
            return redirect('/product/index');
        } else{
            return view('admin.login');
        }
    }
    public function store(Request $request)
    {

        $data=$request->all();

        $this->middleware('VerifyData');

        if($userqty=Employee::where('code', $data['code'])->count()==0)
        {
            return redirect('/login');
        } 
        $user = Employee::where('code', $data['code'])->first();

        $sessiondata = Request();
        $sessiondata->session()->put('user', [
           'user_id' => $user['id'],
           'user_code' => $user['code'],
           'restaurant_id' => $user['restaurant_id'],
           'user_role' => $user['role'],
        ]);
        return redirect ('/product/index');
    }

    public function destroy()
    {
        $request=Request();
        $request->session()->forget('user');
        return redirect('/login');
    }

}

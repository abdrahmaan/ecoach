<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function LoginPage()
    {
        return view("auth.index");
    }

    public function LoginLogic(Request $request)
    {   
        $username = $request->username;
        $password = $request->password;

       $user =  Auth::where("Username",$username)->where("Password",$password)->get()->first();

        if($user !== null){

          $request->session()->put('user-data', $user);
          
          
          switch ($user->Role) {
              case 'Admin':
                return redirect("/admin");
                break;
                case 'Captin':
                    return redirect("/admin/attendances/create");           
                break;
                case 'Accountant':
                    return redirect("/admin");
                break;
          }
          

        } else {

            $request->session()->flash("error","يرجى التأكد من بيانات الدخول");
           return redirect("/login");
        }
    }

    

    public function NewUserPage(Request $request)
    {   
        $data = Auth::all();

        return view("admin.user.index")->with("Users",$data);
    }   

    public function NewUserLogic(Request $request)
    {
        $checkUserName = Auth::where("Username",$request->Username)->get()->first();

        if($checkUserName == null){

           $new = Auth::create([
                'FullName' => $request->FullName,
                'Username' => $request->Username,
                'Password' => $request->Password,
                'Role' => $request->Role
            ]);
            $new->save();
            $request->session()->flash('message', 'done');
            return redirect("/admin/newuser");
        } else {

        }
    }

    public function DeleteUserLogic($id)
    {
        Auth::where("id",$id)->delete();
        session()->flash('message', 'done');

        return redirect("/admin/newuser");
    }
    public function LogOutLogic(Request $request)
    {
        $request->session()->flush();
        return redirect("/login");
    }



}

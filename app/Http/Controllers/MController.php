<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\never;
use App\Models\form;
use App\Models\buisness;
use Session;
class MController extends Controller
{
    //
    public function login()
    {
        return view("login");
    }
    public function form_submit(Request $request)
    {
        $add = new Students;
        if($request->isMethod('post'))
        {
            $add->username=$request->get('username');
            $add->password=$request->get('password');
            $add->save();
        }
        return redirect("/log");
    }
    public function session_form()
    {
        return view("session-form");
    }
    public function change()
    {
        return view('change');
    }
    public function sfm(Request $request)
    {
        $username=$request->get('username');
        $password=$request->get('password');
        $count = buisness::select('*')
            ->where('username', $username)
            ->where('password', $password)
            ->count();
        if ($count > 0) {
            session()->put("user_session", $username);
            return redirect("form");
        }
    }
    public function password(Request $request)
    {
        $name = $request->session()->get('user_session');
        $password = $request->get('opassword');
        $data = buisness::select('*')
            ->where('username', $name)
            ->where('password', $password)
            ->first();
        $new = $request->get('npassword');
        $confirm= $request->get('cpassword');
        echo $confirm;
        if($new==$confirm)
        {
        $count = business::select('*')
        ->where('username', $name)
        ->where('password', $password)
        ->count();
        echo $count;
        if ($count > 0) 
        {
                echo $count;
                echo $name;
                if ($request->isMethod('post')) 
                {
                    $data->password = $request->get('npassword');
                    $data->save();
                }
        }
        return redirect("/change");
        }
      

    }
    public function para()
    {
        return view('para');
    }
    public function form()
    {
        $data=form::simplepaginate(2);
        return view('form',compact('data'));
    }
    public function logout()
        {
         session::flush();
       return redirect('/session-form');
       }
    public function addpage()
    {
        return view("addpage");
    }
    
    public function forms(Request $request)
    {
        $ad = new never;
        if($request->isMethod('post'))
        {
            $ad->name=$request->get('name');
            $ad->content=$request->get('content');
             if($status=="on")
            {
                $status=1;
            }
            else
            {
                $status=0;
            }
            $ad->status=$request->get('status');
            $ad->save();
        }
        else{
            echo"No";
        }
        return redirect("/form");
    }
           
           
    public function pagesummary()
    {
        return view("pagesummary");
    }
    public function insert(Request $request)
    {
        // $check= new page;
        // if($request->isMethod('post'))
        // {
        //     $check->name=$request->get('name');
        //     $check->content=$request->get('content');
        //     $status=$check->status=$request->get('status');
            
        //     if($status=='on')
        //     {
        //     $status=1;
        //     }
        //     else{
        //     $status=0;
        //     }
        //     $check->status=$status;
        //     $check->save();
        // }   
        // return redirect('pagination');
    }
}

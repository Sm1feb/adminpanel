<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
class IController extends Controller
{
    public function display_form()
    {
        return view("display_form");
    }
    public function form_submit(Request $request)
    {
        $add = new Student;
        if($request->isMethod('post'))
        {
            $add->first_name=$request->get('firstname');
            $add->last_name=$request->get('lastname');
            $add->marks1=$request->get('marks1');
            $add->marks2=$request->get('marks2');
            $add->save();
        }
        return redirect("/display-form");
    }
    public function displaydata()
    {
        $data=Student::paginate(3);
        return view('display_form',compact('data'));
    }
    public function deletedata($id)
    {
        $ob=Student::find($id);
        $ob->delete();
        return redirect("display-form");
    }
    public function editdisp($id)
    {
        $data=Student::paginate(2);
        $findrec=Student::where('id',$id)->get();
        return view('display_form',compact('findrec','data'));
    }
    public function editdata(Request $request, $id='')
    {
        $add=Student::find($id);
        if($request->isMethod('post'))
        {
            $add->first_name=$request->get('firstname');
            $add->last_name=$request->get('lastname');
            $add->marks1=$request->get('marks1');
            $add->marks2=$request->get('marks2');
            $add->save();
        }
        return redirect("/display-form");
    }
    public function search(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name=$request->get('name');
            $data=Student::where('first_name', 'LIKE', '%'. $name . '%')->paginate(5);
        }
        return view('display_form',compact('data'));
    }
    public function validation()
    {
        return view('validation-form');
    }
    public function validation_submit(Request $req)
    {
        $this->validate($req, ['firstname'=>'required']);
        $this->validate($req, ['lastname'=>'required']);
        $this->validate($req, ['marks1'=>'required']);
        $this->validate($req, ['marks2'=>'required']);
        return back();
    }
}
?>

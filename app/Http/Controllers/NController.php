<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\category;
use App\Models\product;
use App\Models\buisness;
use Carbon\Carbon;
class NController extends Controller
{
    //
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
        $count = buisness::select('*')
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
        }
        return redirect('session-form');   

    }
    public function pagination()
    {
        return view("pagination");
    }
    public function pagination2()
    {
        return view("simple");
    }
   
    public function insert(Request $request)
    {
    $check= new page;
    if($request->isMethod('post'))
    {
        $check->name=$request->get('name');
        $check->content=$request->get('content');
        $status=$check->status=$request->get('status');
        
        if($status=='on')
        {
         $status=1;
        }
        else{
         $status=0;
        }
        $check->status=$status;
        $check->save();
    }
        return redirect('insert');
    }
   public function page()
   {
    return view("pagination");
   }
   public function page1(Request $request)
   {
   $check = new form;
   if($request->isMethod('post'))
   {
       $check->name=$request->get('name');
       $check->content=$request->get('content');
       $status=$check->status=$request->get('status');
       
       if($status=='on')
       {
        $status=1;
       }
       else{
        $status=0;
       }
       $check->status=$status;
       $check->save();
   }
       return redirect('form');
   } 
   public function deletedata($id)
   {
    $ob=form::find($id);
    $ob->delete();
    return redirect("form");
   }
   public function editdisp($id)
   {
    $findrec=form::where('id',$id)->get();
    return view('addpage',compact('findrec'));

   }
   public function edit6(Request $request,$id='')
   {
    $add=form::find($id);
    if($request->isMethod('post'))
    {
        $add->name=$request->get('name');
        $add->content=$request->get('content');
        $status=$add->status=$request->get('status');
        
        if($status=='on')
        {
         $status=1;
        }
        else{
         $status=0;
        }
        $add->status=$status;
        $add->save();
    }
        return redirect('form');
    } 

   public function search(Request $request)
   {
    if($request->isMethod('post'))
    {
        $n=$request->get('n');
        $data=form::where('name', 'LIKE', '%'. $n . '%')->paginate(5);
    }
    return view('form',compact('data'));
   }
   public function category()
   {
    return view("addcategory");
   }
   public function categoryn(Request $request)
   {
    $check = new category;
    if($request->isMethod('post'))
    {
       $check->categoryname=$request->get('catname');
      $check->save();
    }
        return redirect('csummary');
    } 
    public function csummary()
    {
        $date=category::simplepaginate(2);
        return view('csummary',compact('date'));
    }
    public function delete1($id)
    {
     $ob=category::find($id);
     $ob->delete();
     return redirect("csummary");
    }
    public function edit1($id)
    { 
        $findrec=category::where('id',$id)->get();
        return view('addcategory',compact('findrec'));
    }
    public function search1(Request $request)
    {
        if($request->isMethod('post'))
        {
            $name=$request->get('name');
            $date=category::where('categoryname', 'LIKE', '%'. $name . '%')->paginate(5);
        }
        return view('csummary',compact('date'));
    }
    public function product1()
    {
        $date=category::simplepaginate(8);
        return view('product',compact('date'));
    }
    public function edit4($id)
    {
        $findrec=category::where('id',$id)->get();
        return view('addcategory',compact('findrec'));
    }
    public function edit5(Request $request,$id='')
    {
     $add=category::find($id);
     if($request->isMethod('post'))
     {
        $add->categoryname=$request->get('catname');
       $add->save();
     }
         return redirect('csummary');
     } 
    
    //for add page form and table
    public function addproduct(Request $request)
    {
         $this->validate($request,['category'=>'required']);
        $this->validate($request,['name'=>'required']);
        $this->validate($request,['price'=>'required']);
        $this->validate($request,['description'=>'required']);
        $add= new product;

        if($request->isMethod('post'))
        {
         $add->category=$request->get('category');
        $add->name=$request->get('name');
        $add->price=$request->get('price');
        $add->description=$request->get('description');


        if(!empty($request->file('image')))
        {
            $file=$request->file('image');
            $current=uniqid(Carbon::now()->format('Ymdhs'));
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $fullfilename=$current.".".$file->getClientOriginalExtension();

            $destinationPath=public_path('uploads');
            $file->move($destinationPath,$fullfilename);
            $add->image=$fullfilename;
        }
        $add->save();
        }
        return redirect('/summaryproduct');
    }
      //for displaying content in summarypage
     
     public function summaryproduct()
     {
        $product=product::simplepaginate(3);
        // print_r($product);
        return view('summaryproduct',compact('product'));
        
     }
//      //to delete data in products
      public function p_deletedata($id)
     {  
          $obj= product::find($id);
          unlink('uploads/'.$obj->image);
           $obj->delete();
          return redirect("summaryproduct");
      }
      public function search3(Request $request)
      {
          if($request->isMethod('post'))
          {
              $nam=$request->get('search');
              $product=product::where('name', 'LIKE', '%'. $nam . '%')->paginate(5);

          }
          return view('summaryproduct',compact('product'));
      }
      public function edit0($id)
      {
        $date=category::simplepaginate();
       $findrec=product::where('id',$id)->get();
       return view('product',compact('date','findrec'));
   
      }
//        //to save changes
//       public function p_editdata(Request $request, $id='')
//       {  
//          $add=category::find($id);
//          if($request->isMethod('post'))
//        {
//            $add->name=$request->get('name');
      
//            $add->save();
//        }
//        return redirect("summarycat");
//       }

//      //to save changes
     public function p_editsave(Request $request, $id='')
     {  
        $add=product::find($id);
        $image = $add->image;
        print_r($image);
        if($request->isMethod('post'))
      {
         $add->category=$request->get('category');
          $add->name=$request->get('name');
          $add->price=$request->get('price');
          $add->description=$request->get('description');
          if(!empty($request->file('image')))
          {
              $file=$request->file('image');
             $current=uniqid(Carbon::now()->format('Ymdhs'));
              $file->getClientOriginalName();
              $file->getClientOriginalExtension();
              $fullfilename=$current.".".$file->getClientOriginalExtension();
              $destinationPath=public_path('uploads');
              $file->move($destinationPath,$fullfilename);
              $add->image=$fullfilename;
              unlink('uploads/'. $image);
          }
          $add->save();
      }
      return redirect("summaryproduct");
     
   }
}

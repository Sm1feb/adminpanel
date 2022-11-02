<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Company;
use App\Post;
use App\Exceptions\PageNotFoundException;
class RelationShipController extends Controller
{
    public function hasone(){
        // $users = Users::all();
        // $users = Users::with('company')->get();
        // return view('relationship',compact('users'));
     try{
        $user=Users::where('id',10)->firstOrFail();
     }
     catch(\Exception $exception)
     {
        throw new PageNotFoundException();
     }
    }
    public function belongsto(){
        $company=Company::with('user')->get();
        return view('relationship1',compact('company'));
    }

}
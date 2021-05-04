<?php

namespace App\Http\Controllers;

use App\Useraccess;
use Illuminate\Http\Request;

class UseraccessController extends Controller
{
    //

    public function __construct()
    {
       $this->middleware('auth') ;
    }

    public function getuseraccess()
    {
               $user_access = Useraccess::get();
               return view('admin/UserAccess/list',compact('user_access'));
       
   }

   public function adduser(Request $request)

   {
      Useraccess::create([
         'userid' => $request->userid,
         'moduleid' => $request->moduleid   
         ]);
         
         return redirect('admin/useracess/list');
   }

   public function hapusdata($id)
   {
      Useraccess::destroy($id);
      return redirect('admin/useracess/list');
   }

}



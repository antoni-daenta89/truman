<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\user;
use App\Useraccess;
use App\clients;

class AdminController extends Controller
{
    //
    public function __construct()
    {
       $this->middleware('auth') ;
    }
    
    public function showuser()
    {
        $users  = user::where('active','=','1')->get();
        return view( 'admin.userlist',compact('users'));
    }


    public function update_user(Request $request,$id)
    {
               user::where('id',$id)->update([
               'name'=> $request->name,
               'address' => $request->address,
               'phone'=>$request->phone                    
               ]);    
                return redirect('/admin/userlist');
    }

    public function changepassword(Request $id,$newpass)
            {
                
                user::where('id',$id)->update([
                        'password' => Hash::make($newpass),                               
                ]);    
                return view('/admin/userlist');
            }


         public function activateuser($id)
            {
                user::where('id',$id)->update([
                        'active' =>'1'                                
                ]);    
                return redirect('/admin/PendingUsers');
            }

        public function hapusdatauser($id)
        {
            //   dd($id);
           // user::destroy($id);
          $sdata = user::where('id',$id);
          $sdata->delete();      
          return redirect('/admin/PendingUsers');
        }

        public function disableuser($id)
            {
                user::where('id',$id)->update([
                        'active' =>'0'        
                ]);    
                return redirect('/admin/userlist');
            }

    public function showpendinguser()
    {
        $pendingusers  = user::where('active','<>','1')->get();
        return view( 'admin.PendingUsers',compact('pendingusers'));
    }

    public function index(Request $request)
    {
       $users = user::where('name','LIKE','%'.$request->search.'%')->all();
              return view('admin.userlist',compact('users'));
    }

    public function viewuserdata($id)
    {     
            $users = user::findOrfail($id);
        return view('admin.editusers',compact('users'));
    } 

    public function moduleadduser()
    {
            $combo_option = user::where('active','=','1')->get();
            return view('admin.UserAccess.add',compact('combo_option'));
            //add data

    }

    public function moduleadduserclient()
    {
            $combo_option = user::where('active','=','1')->get();
            $combo_option2 = clients::get();
            return view('admin.ClientAccess.add',compact('combo_option'),compact('combo_option2'));
    }

}

   



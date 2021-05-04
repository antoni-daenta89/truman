<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\clientsacess;

class ClientAccessController extends Controller
{
    //

    public function __construct()
    {
       $this->middleware('auth') ;
    }

    public function getclientaccess()
            {
               $client_access = clientsacess::get();
              //  return view('/admin/useracess/list',compact('getdata'));
              return view('/admin/ClientAccess/list',compact('client_access'));
            }

         public function deldata($id)
         {

            clientsacess::destroy($id);
            return redirect('/admin/clientaccess/list');
         }

         
   public function savenew(Request $request)

   {
      clientsacess::create([
         'userid' => $request->userid,
         'clientid' => $request->clientid   
         ]);
         
         return redirect('/admin/clientaccess/list');
   }

       


}

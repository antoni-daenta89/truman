<?php

namespace App\Http\Controllers;

use App\clients;
use App\clientsacess;
use Illuminate\Http\Request;
use voku\helper\ASCII;

class ClientController extends Controller
{
    //

    public function __construct()
    {
       $this->middleware('auth') ;
    }
    
    public function index(Request $request)
    {
       $clients = clients::where('code','LIKE','%'.$request->search.'%')
                                ->orwhere('name','LIKE','%'.$request->search.'%')->get();
              return view('client\ClientList',compact('clients'));
    }
    public function index2(Request $request)
    {
       $clients = clients::where('code','LIKE','%'.$request->search.'%')
                                ->orwhere('name','LIKE','%'.$request->search.'%')->get();
              return view('admin\client\ClientList',compact('clients'));
    }

    public function viewalldata()
    {
        $clients = clients::all();   
        return view('client.ClientList',compact('clients'));
    }

    public function viewlistclient(Request $request, $name)
    {    

        //dd($name);
             $view_client = clients::from('clients as t1')->join('clientsacesses as t2','t1.code','=','t2.clientid')
                                ->where('t2.userid','=',$name)->get();               
          //  $view_client = clientsacess::where('userid',$request);
            //    dd($view_client);

        return view('client.ClientList',compact('view_client'));
    }

    public function viewclientdata($id)
    {     
            $showdata = clients::findOrfail($id);
        return view('client.Clientpage',compact('showdata'));
    } 


public function addclient()
{
    return view('/admin/client/addclient');
}

    public function saveaddclient(Request $request)

    {
        clients::create([
            'code'=> $request->code,
            'name'=> $request->name,
            'alamat' => $request->alamat,
            'telepon'=>$request->telepon ,
            'phone'=>$request->phone ,        
            'joindate'=> $request->joindate,
            'email' => $request->email,
            'npwp'=>$request->npwp ,  
            'KTP'=> $request->KTP,
            'Type' => $request->typeclient, 
            ]);    

             return redirect('admin/client/clientlist');
    }



    public function viewclientdata_admin($id)
    {     
            $showdata = clients::findOrfail($id);
        return view('admin.client.Clientpage',compact('showdata'));
    } 

    public function updateclient(Request $request,$id)
    {
               clients::where('id',$id)->update([
                'code'=> $request->code,
                'name'=> $request->name,
                'alamat' => $request->alamat,
                'telepon'=>$request->telepon ,
                'phone'=>$request->phone ,        
                'joindate'=> $request->joindate,
                'email' => $request->email,
                'npwp'=>$request->npwp ,  
                'KTP'=> $request->KTP,
                'Type' => $request->typeclient, 
               ]);    

                return redirect('admin/client/clientlist');
    }

    public function hapusdata($id)
    {
        clients::destroy($id);
       return redirect('/admin/client/clientlist');
    }

}
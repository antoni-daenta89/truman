@extends('layouts.main')

@section('title','Client List')


@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection


@section('breadcrumbs')

@endsection


@section('content')
<div class="container">
  <!-- Success Message -->

<div class="row justify-content-cente mb-3">
  <div class="col-md-4">

  <nav class="navbar navbar-light bg-light justify-content-between">
        <form class="form-inline">
          <input class="form-control mr-sm-2" name="search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>  
        </form>
      </nav>
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><a href="/admin/client/addclient">Add Client</a></button>
  </div>

  
    <table class ="table"> 
   
        <thead>
            <tr>
                <th>No.</th>         
                <th>Code</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telepon</th>                
            </tr>
        </thead>

        <tbody>
            @foreach($clients as $clients)            
            <tr>
                 <td>{{$loop->iteration}}</td>
                 <td><a href="/admin/client/Clientpage/{{$clients->id}}">{{$clients->code}}</a></td>
                <td>{{$clients->name}}</td>
                <td>{{$clients->alamat}}</td>
                <td>{{$clients->telepon}}</td>    
                <td>     

                <form action="/deleteclient/{{$clients->id}}"  method="POST">
                  <button type="submit" class="btn btn-danger"  id ="mybtn" onclick="myfunction()">Delete</button>
                @csrf 
                @method('DELETE')
                </form>   

              
                </td> 
            </tr>            
            @endforeach       
        </tbody>
    </table>
</div>

@endsection

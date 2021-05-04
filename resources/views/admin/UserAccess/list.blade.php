@extends('layouts.main')

@section('title','User Access List')


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

      <h2>User Module Access</h2>

      <br>

      <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><a href="/admin/useracess/add">Add Module</a></button>
      <br>
  </div>
    
   <table class ="table"> 
        <thead>
            <tr>
                <th>No.</th>         
                <th>User ID</th>
                <th>Module</th>                
            </tr>
        </thead>
        <tbody>
       
        @foreach($user_access as $user_access)            
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user_access->userid}}</td>
                <td>{{$user_access->moduleid}}</td>    
                <td>      

                <form action="/deluseraccess/{{$user_access->id}}"  method="POST">
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

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
            @foreach($view_client as $view_client)            
            <tr>
                 <td>{{$loop->iteration}}</td>
                 <td><a href="/client/Clientpage/{{$view_client->id}}">{{$view_client->code}}</a></td>
                <td>{{$view_client->name}}</td>
                <td>{{$view_client->alamat}}</td>
                <td>{{$view_client->telepon}}</td>     
              </tr>            
            @endforeach       
        </tbody>
    </table>
</div>

@endsection

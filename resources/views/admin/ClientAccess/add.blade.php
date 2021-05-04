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

            <h2>Tambah Akses Client </h2>

            <br><br>

            <form class="mb-4"  action="/addclientaccess" method="POST">
            @csrf 
         
            <div class="form-group">
                <label for="">User ID</label>
                <select name="userid" id="myselect" class="form-control">
                <option value="0"></option>
                @foreach ($combo_option as $combo_option)
	                   <option value="{{$combo_option->name}}">{{$combo_option->name}}</option> 
	              @endforeach
                </select>
            </div>  


            <div class="form-group">
                <label for="">Client ID</label>
                <select name="clientid" id="myselect2" class="form-control">
                <option value="0"></option>
                @foreach ($combo_option2 as $combo_option2)
	                   <option value="{{$combo_option2->code}}">{{$combo_option2->name}}</option> 
	              @endforeach
            
                </select>
            </div>  

            <button type="submit" class="btn btn-success">Add</button>
               
     </form>
     <button type="submit" class="btn btn-warning"><a href="/admin/clientaccess/list">Cancel</a></button>  
  </div>
</div>

@endsection

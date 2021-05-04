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

            <h2>Tambah Akses User</h2>
            <br><br>
            <form class="mb-4"  action="/adduseraccess" method="POST">
            @csrf 
    
            <div class="form-group">
                <label for="">User ID</label>
                <select name="userid" id="userid" class="form-control">
                <option value="0" selected='selected'></option>
                @foreach ($combo_option as $combo_option)
	                   <option value="{{$combo_option->name}}">{{$combo_option->name}}</option> 
	              @endforeach
                </select>
            </div>  

            <div class="form-group">
                <label for="">Module</label>
                <select name="moduleid" id="moduleid" class="form-control">
                <option value="0" selected='selected'></option>
                <option value="Orang Pribadi">Orang Pribadi</option>
                <option value="Badan/Perusahaan" >Badan/Perusahaan</option>
                <option value="HKI">HKI</option>
                <option value="Management" >Management</option>
                </select>
            </div>  

            <button type="submit" class="btn btn-success">Add</button>
            <button type="submit" class="btn btn-warning"><a href="/admin/useraccess/list">Cancel</a></button>  

            </form>
  </div>
</div>

@endsection

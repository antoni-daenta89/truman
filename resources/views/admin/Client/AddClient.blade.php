@extends('layouts.main')

@section('title','Add User')

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}"> 
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->

<div class="row justify-content-cente mb-3">
  <div class="col-md-4">
        <form method="post" action="/addclient" id="myForm" method="POST">
            @csrf
        

            <h2>Tambah Data Client</h2>
            <br><br>

            <div class="form-group">
                <label for="">Code</label>
                <input value = "" type="text"  class="form-control" name="code">
            </div>

            <div class="form-group">
                <label for="">Name</label>
                <input value="" type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">Alamat</label>
                <input value="" type="text" class="form-control" name="alamat">
            </div>
            
            <div class="form-group">
                <label for="">Telepon</label>
                <input value="" type="number" class="form-control" name="telepon">
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input value="" type="number" class="form-control" name="phone">
            </div>

            <div class="form-group">
                <label for="">Join Date</label>
                <input value="" type="date" class="form-control" name="joindate">
            </div>  
            
            <div class="form-group">
                <label for="">Email</label>
                <input value="" type="text" class="form-control" name="email">
            </div>  
            
            <div class="form-group">
                <label for="">NPWP</label>
                <input value="" type="text" class="form-control" name="npwp">
            </div>  
            
            <div class="form-group">
                <label for="">KTP</label>
                <input value="" type="text" class="form-control" name="KTP">
            </div>  

            <div class="form-group">
                <label for="">Type</label>
                
                <select name="myselect" id="myselect" class="form-control"  name="typeclient">
                <option value="2" selected='selected'></option>
                <option value="1">Pribadi</option>
                <option value="2" >Badan/Perusahaan</option>
                </select>
            </div>  

                <br>
                <br>
            <button type="submit" class="btn btn-success">Add</button>
            <button type="submit" class="btn btn-warning"><a href="/admin/client/clientlist">Cancel</a></button>  
        </form>
    </div>
</div>



@endsection
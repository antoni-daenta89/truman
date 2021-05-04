@extends('layouts.main')

@section('title','Edit User')

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}"> 
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->

</div>


<div class="container mt-5" style="width: 33%;" >
  
<form method="post" action="/updateclient/{{$showdata->id}}" id="myForm" method="POST">    
            @csrf
      
            
            <h2>Edit Data Client</h2>
            <br><br>

            <div class="form-group">
                <label for="">Code</label>
                <input value = "{{$showdata->code}}" type="text"  class="form-control" name="code">
            </div>

            <div class="form-group">
                <label for="">Name</label>
                <input value="{{$showdata->name}}" type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">Alamat </label>
                <input value="{{$showdata->alamat}}" type="text" class="form-control" name="alamat">
            </div>
            
            <div class="form-group">
                <label for="">Telepon </label>
                <input value="{{$showdata->telepon}}" type="number" class="form-control" name="telepon">
            </div>

            <div class="form-group">
                <label for="">Phone </label>
                <input value="{{$showdata->phone}}" type="number" class="form-control" name="phone">
            </div>

            <div class="form-group">
                <label for="">Join Date</label>
                <input value="{{$showdata->joindate}}" type="date" class="form-control" name="joindate">
            </div>  
            
            <div class="form-group">
                <label for="">Email</label>
                <input value="{{$showdata->email}}" type="text" class="form-control" name="email">
            </div>  
            
            <div class="form-group">
                <label for="">NPWP</label>
                <input value="{{$showdata->npwp}}" type="text" class="form-control" name="npwp">
            </div>  
            
            <div class="form-group">
                <label for="">KTP</label>
                <input value="{{$showdata->KTP}}" type="text" class="form-control" name="KTP">
            </div>  

            <div class="form-group">
                <label for="">Type</label>
                <input value="{{$showdata->Type}}" type="text" class="form-control" name="typeclient">
            </div>  

            <div class="form-group">
                <label for="">Un Active Date</label>
                <input value="{{$showdata->unactivedate}}" type="date" class="form-control" name="unactivedate">
            </div>  

            <button type="submit" class="btn btn-success">Update</button>
            <button type="submit" class="btn btn-warning"><a href="/admin/client/clientlist">Cancel</a></button>  
</form>

</div>
  
</body>
@endsection

@section('script')
   <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection





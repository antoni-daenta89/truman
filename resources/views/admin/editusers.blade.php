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
   
          <form method="post" action="/update/{{$users->id}}" id="myForm">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">User Name</label>
                <input value = "{{$users->name}}" type="text"  class="form-control" name="name">
            </div>

            <div class="form-group">
                <label for="">Address </label>
                <input value="{{$users->address}}" type="text" class="form-control" name="address">
            </div>

            <div class="form-group">
                <label for="">Phone</label>
                <input value="{{$users->phone}}" type="text" class="form-control" name="phone">
            </div>  

                <button type="submit" class="btn btn-success" onclick=myfunction()>Update</button>
                <button type="submit" class="btn btn-warning"><a href="/admin/userlist">Cancel</a></button>            
        </form>
       
    </div>
@endsection

@section('footer')
<script>
    function myfunction(){

  //    e.preventDefault();

       var x = document.getElementById("mybtn");
                   Swal.fire({
           title: 'Apakah anda yakin?',
              text: "Segala perubahan tidak bisa dikembalikan!",
              icon: 'warning',
             showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, Update data'
                }).then((result) => {
            if (result.isConfirmed) {       
              action="/update/{{$users->id}}"
              ALERT("/update/{{$users->id}}")
              Swal.fire({
                size:'small',
                position: 'bottom-end',
                icon: 'success',
                title: 'Data Sudah di update',
                showConfirmButton: false,
                timer: 1500
                        })

                      return  view('/admin/userlist');
            }})
   //x.disable= true;
    }
    </script>
@endsection



@extends('layouts.main')

@section('title','Users List')

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
 
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->

<div class="row justify-content-cente mb-3">
  <div class="col-md-4"> 
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="/admin/PendingUsers">Pending User List</a></button>  
  </div>
    

    
    <table class ="table"> 
        <thead>
            <tr>
                <th>No.</th>         
                <th>Name</th>
                <th>Email</th>
                <th>Adress</th>
                <th>Phone</th>
                <td></td>
            </tr>
        </thead>

        <tbody>
            @foreach($users as $users)            
            <tr>
                 <td>{{$loop->iteration}}</td>
                 <td><a href="/admin/editusers/{{$users->id}}">{{$users->name}}</a></td>
                 <td>{{$users->email}}</td>                
                <td>{{$users->address}}</td>
                <td>{{$users->phone}}</td>       
                <td>         
                
                <form action="/deactivate/{{$users->id}}"  method="POST">
                  @csrf               
                  <button type="submit" class="btn btn-danger">Deactivate</button>
                  </form>   
                </td>           
              </tr>            
            @endforeach    
        </tbody>
    </table>            
</div>
@endsection

@section('footer')
<script>
    function myfunction(){
        var x = document.getElementById("mybtn");
                    Swal.fire({
              title: 'Apakah anda yakin?',
              text: "Segala perubahan tidak bisa dikembalikan!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, Hapus data'
            }).then((result) => {
              if (result.isConfirmed) {  
                Swal.fire(
                  'Data sudah di hapus!',               
                  'success'
                )


              }
            })
       // x.disable= true;
    }
    </script>
@endsection



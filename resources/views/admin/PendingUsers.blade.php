@extends('layouts.main')

@section('title','Pending Users List')

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->

<div class="row justify-content-cente mb-3">
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
            @foreach($pendingusers as $pendingusers)            
            <tr>
                 <td>{{$loop->iteration}}</td>
                 <td>{{$pendingusers->name}}</a></td>
                 <td>{{$pendingusers->email}}</a></td>                
                <td>{{$pendingusers->address}}</td>
                <td>{{$pendingusers->phone}}</td>
                <td>    
            <form action="/activate/{{$pendingusers->id}}"  method="POST">
                @csrf               
              <button type="submit" class="btn btn-success">Activate</button>
            </form>   
            </td>
            <td>
            <form action="/hapus_user/{{$pendingusers->id}}"  method="POST">
                @csrf               
              <button type="submit" class="btn btn-danger">Delete</button>
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
              confirmButtonText: 'Ya, Aktifkan User'
            }).then((result) => {
              if (result.isConfirmed) {
                
                
                Swal.fire({
                size:'small',
                position: 'bottom-end',
                icon: 'success',
                title: 'Data Sudah di update',
                showConfirmButton: false,
                timer: 1500
                        })


              }
            })
       // x.disable= true;
    }
    </script>

<script>
    function confirmdelete(){
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
                
                
                Swal.fire({
                size:'small',
                position: 'bottom-end',
                icon: 'success',
                title: 'Data Sudah di hapus',
                showConfirmButton: false,
                timer: 1500
                        })


              }
            })
       // x.disable= true;
    }
    </script>
@endsection



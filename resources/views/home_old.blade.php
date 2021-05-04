@extends('layouts.main')

@section('title','Profile')


@section('breadcrumbs')

@endsection


@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->
<div class="content mt-3">
<div class="animated fadeIn">
 
 <div class="offset-md-2 col-md-6">
      <div class="content">
        <!-- Data User -->
      <label for="">Name</label>
      <p>{{auth::user()->name}}</p>
      <label for="">Email</label>
      <p>{{auth::user()->email}}</p>
      <label for="">Address</label>
      <p>{{auth::user()->address}}</p>
      <label for="">Nomor Telepon</label>
      <p>{{auth::user()->phone}}</p>    
          </div>
      </div>
</div>
</div>
</div>
@endsection

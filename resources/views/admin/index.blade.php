@extends('layouts.app')

@section('title')
    Admin 
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->


<div class="row left-content-cente mb-2">
          <ul class="list-group">
            <li class="list-group-item"><a href="">User List</a></li>         
            <li class="list-group-item"><a href="">User Access</a></li>
            <li class="list-group-item"><a href="">Client List </a></li>
            <li class="list-group-item"><a href="">Client Access</a></li>
          </ul>
</div>

@endsection

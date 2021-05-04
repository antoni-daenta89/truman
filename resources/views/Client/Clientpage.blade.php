@extends('layouts.main')

@section('title','Client List')


@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection


@section('breadcrumbs')

<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                    </div>
                </div>
            </div>

            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"><i class="fa fa-dashboard"></i></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
@endsection
@section('content')
<body>
<div class="container">
  <h1 class="title">{{$showdata->code}}</h1>
  <hr>
  <div class="row">

  <div class="col-lg-4 desc">
      <h4 id="name">Name : </h4>
      <p>{{$showdata->name}}</p>
    </div>

    <div class="col-lg-4 desc">
      <h4 id="description">Alamat : </h4>
      <p>{{$showdata->alamat}}</p>
    </div>

    <div class="col-lg-4 desc">
      <h4 id="telepon">Telepon :</h4>
      <p>{{$showdata->telepon}}</p>
    </div>

    <div class="col-lg-4 desc">
      <h4 id="phone">Phone :</h4>
      <p>{{$showdata->phone}}</p>
    </div>

    <div class="col-lg-4 desc">
      <h4 id="joindate">Join Date : </h4>
      <p>{{$showdata->joindate}}</p>
    </div>
    
    <div class="col-lg-4 desc">
      <h4 id="email">Email : </h4>
      <p>{{$showdata->email}}</p>
    </div>

    <div class="col-lg-4 desc">
      <h4 id="npwp">NPWP : </h4>
      <p>{{$showdata->npwp}}</p>
    </div>

    <div class="col-lg-4 desc">
      <h4 id="ktp">KTP : </h4>
      <p>{{$showdata->ktp}}</p>
    </div>
  </div>
</div>
  
</body>
@endsection

@section('script')
   <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
@endsection

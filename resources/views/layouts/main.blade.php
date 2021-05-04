<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') </title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styleassets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>   
    <link rel="stylesheet" href="{{ asset('style/assets/css/SweetAlert2/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/SweetAlert2/sweetalert2.min.css') }}">
</head>
<body>    
    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script>
    <script src="{{ asset('style/assets/js/sweetalert2.min.js') }}"></script>


    <script>
     //   Swal.fire('ini yang pertama')   
    </script>

    <script>
                $(document).on('click', '#tombolhapus',function(e){
                      //  e.preventDefault();
                        Swal.fire('Any fool can use a computer')             
                })
    </script>

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">Truman Consultant</a>
                <a class="navbar-brand hidden" href="#">TMC</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                 <!--           
                    <li>
                        <a href="/home"> <i class="menu-icon fa fa-book"></i>My Profile</a>
                    </li>
                        -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Admin Suite</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-laptop"></i><a href="/admin/userlist">User List</a></li>
                            <li><i class="menu-icon fa fa-laptop"></i><a href="/admin/useracess/list">User Access Module</a></li> 
                            <li><i class="menu-icon fa fa-laptop"></i><a href="/admin/client/clientlist">Client List</a></li> 
                            <li><i class="menu-icon fa fa-laptop"></i><a href="/admin/clientaccess/list">Client Access</a></li>                       
                        </ul>
                    </li>
                   
                    <li>
                        <a href="/client/clientlist/{{Auth::user()->name}}"> <i class="menu-icon fa fa-book"></i>Client List</a>
                    </li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Module</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="/client/clientlist">Orang Pribadi</a></li>
                            <li><i class="fa fa-table"></i><a href="">Badan</a></li>       
                            <li><i class="fa fa-table"></i><a href="">HKI</a></li>
                            <li><i class="fa fa-table"></i><a href="">Management</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <div id="right-panel" class="right-panel">
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left"> 
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}    
                        </a>
                        <div class="user-menu dropdown-menu">
                        <a href = "" class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     @csrf
                                 </form>
                        </div>
                    </div>
                </div>       
            </div>

        </header><!-- /header -->
                @yield('breadcrumbs')
                @yield('content')
                @yield('footer')
                
    </div>    

</body>
</html>
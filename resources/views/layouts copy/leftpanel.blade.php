<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="{{route('home')}}"><img src="{{asset('images/logo2.png')}}" alt="Logo"></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                @if($halaman=='index')
                  <li class="active">
                @else
                  <li>
                @endif
                    <a href="{{route('home')}}"> <i class="menu-icon fa fa-dashboard"></i>DASHBOARD </a>
                </li>
                @if(isset($currmenus) && count($currmenus))
                  @foreach($currmenus as $currmenu)
                    @if($halaman==substr($currmenu->linkto,1,strlen($currmenu->linkto)-1))
                      <li class="active">
                    @else
                      <li>
                    @endif
                        <a href="{{url($currmenu->linkto)}}"><i class="{{$currmenu->menuicon}}"></i>{{strtoupper($currmenu->menuname)}}</a>
                    </li>
                  @endforeach
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

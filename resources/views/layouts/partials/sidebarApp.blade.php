<!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="/user/{{Auth::user()->id}}/profile"><img src="/img/ui-sam.jpg"
                                                                                  class="img-circle" width="60"></a>
            </p>
            <h5 class="centered">{{Auth::user()->name." ".Auth::user()->last_name}}</h5>

            <li class="mt">
                @if(Auth::user()->hasRole(['Owner']))
                    <a class="active" href="/owner/{{Auth::user()->id}}/dashboard">


                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                @else
                    <a class="active" href="/company/{{Auth::user()->company->id}}/dashboard">


                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>

                @endif
            </li>


            @if(Auth::user()->hasRole(['Owner']))
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>Empresas</span>
                    </a>
                    <ul class="sub">
                        <li><a href="/company/index">Clientes</a></li>
                        <li><a href="buttons.html">En el sistema</a></li>
                        <li><a href="panels.html">Panels</a></li>
                    </ul>
                </li>
            @endif
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span>Components</span>
                </a>
                <ul class="sub">
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="todo_list.html">Todo List</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-book"></i>
                    <span>Extra Pages</span>
                </a>
                <ul class="sub">
                    <li><a href="blank.html">Blank Page</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="lock_screen.html">Lock Screen</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-tasks"></i>
                    <span>Forms</span>
                </a>
                <ul class="sub">
                    <li><a href="form_component.html">Form Components</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class="fa fa-th"></i>
                    <span>Data Tables</span>
                </a>
                <ul class="sub">
                    <li><a href="basic_table.html">Basic Table</a></li>
                    <li><a href="responsive_table.html">Responsive Table</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a href="morris.html">Morris</a></li>
                    <li><a href="chartjs.html">Chartjs</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
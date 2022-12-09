    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
       <h1>HRMS</h1>
        <!--<h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down" src="{{ asset('Admin/app-assets/images/logo/EMS_logo_-_Copy-removebg-preview.png') }}" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('Admin/app-assets/images/logo/EMS_logo_-_Copy-removebg-preview.png') }}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">EMS</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>-->
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
       
      
        <!-- <li class="active"><a class="active" href="dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Dashboard</span></a>
        </li> -->

        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('Dashboard')}}"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Dashboard</span></a>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('employeeList')}}"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile"></span>Add Employee</span></a>
        </li>
       
       <li class="bold"><a class="waves-effect waves-cyan " href="{{route('manageLeave')}}"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Manage Leaves</span></a>
        </li>

         <li class="bold"><a class="waves-effect waves-cyan " href="{{route('employeeTimeSheet')}}"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">Daily Timesheet</span></a>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('project-creation')}}"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">Project Creation</span></a>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan " href="{{route('create-team')}}"><i class="material-icons">group</i><span class="menu-title" data-i18n="File Manager">Create Team</span></a>
        </li>
       



    

      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->
 <head>
       <style>
ul li.active a{
    background:#ddd !important;
    color:red !important;
}
</style>
</head>
 
 
  <!-- BEGIN: SideNav-->
  <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html">
            <!--<img class="hide-on-med-and-down" src="{{ asset('Admin/app-assets/images/logo/EMS_logo_-_Copy-removebg-preview.png')}}"-->
            <!--alt="materialize logo"/>-->
            <!--<img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('Admin/app-assets/images/logo/EMS_logo_-_Copy-removebg-preview.png')}}"-->
            <!--alt="materialize logo"/>-->
            <span class="logo-text hide-on-med-and-down">EMS</span>
            </a><a class="navbar-toggler" href="#">
                <i class="material-icons">radio_button_checked</i>
                </a>
                </h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
       
      
        <!-- <li class="active"><a class="active" href="dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Dashboard</span></a>
        </li> -->

        <li class="navigation-header"><a class="navigation-header-text" style="color: #2B547E;">ADMIN Dashboard</a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>

<li class="{{ Request::is('Dashboard') ? 'active' : '' }}"><a class="waves-effect waves-cyan" href="{{ url('/Dashboard') }}" ><i class="material-icons" style="color :#6c5ffc ">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban" style="color: #282f53 ";>Dashboard</span></a>
</li>






<li class="navigation-header"><a class="navigation-header-text" style="color: #2B547E;">PM Section</a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>


<li  class="{{ Request::is('employeeTimeSheet') ? 'active' : '' }}"><a class="waves-effect waves-cyan" href="{{ url('employeeTimeSheet') }}"><i class="material-icons" style="color:#6c5ffc;">list_alt</i><span class="menu-title" data-i18n="File Manager"  style="color: #282f53";> Timesheet</span></a>
</li>


 <li class="{{ Request::is('Department') ? 'active' : '' }}"><a class="waves-effect waves-cyan " href="{{ url('/Department') }}" ><i class="material-icons" style="color:#6c5ffc ;">developer_board</i><span class="menu-title" data-i18n="File Manager" style="color: #282f53";>Department</span></a>
</li>
<li class="{{ Request::is('create-team') ? 'active' : '' }} || {{ Request::is('Add-Team') ? 'active' : '' }} || "><a class="waves-effect waves-cyan " href="{{ url('/create-team') }}" ><i class="material-icons" style="color:#6c5ffc ;">group</i><span class="menu-title" data-i18n="File Manager" style="color: #282f53";>Teams</span></a>
</li>
<li class="{{ Request::is('project-creation') ? 'active' : '' }} || {{ Request::is('addProject') ? 'active' : '' }} "><a class="waves-effect waves-cyan " href="{{ url('/project-creation') }}"><i class="material-icons" style="color:#6c5ffc ;">source</i><span class="menu-title" data-i18n="File Manager" style="color: #282f53";>Projects</span></a>
</li>
 <!--<li class="{{ Request::is('clientT') ? 'active' : '' }} || {{ Request::is('addClient') ? 'active' : '' }} "><a class="waves-effect waves-cyan " href="{{ url('/clientT') }}" ><i class="material-icons" style="color:#6c5ffc ;">person</i><span class="menu-title" data-i18n="File Manager" style="color: #282f53";>Clients</span></a>-->
</li>
<li class="{{ Request::is('Notification') ? 'active' : '' }} || {{ Request::is('addnotification') ? 'active' : '' }} "><a class="waves-effect waves-cyan " href="{{ url('/Notification') }}" ><i class="material-icons" style="color:#6c5ffc ;">notifications_none</i><span class="menu-title" data-i18n="File Manager" style="color: #282f53";>Notification</span></a>
</li>

  <!--Hr Section Start-->
 <li class="navigation-header"><a class="navigation-header-text" style="color: #2B547E;">HR Section</a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>

<!-- <li class="bold"><a class="waves-effect waves-cyan " href="AdminEmployeeInfo.html"><i class="material-icons">manage_search</i><span class="menu-title" data-i18n="ToDo">Manage Employee</span></a>
</li> -->

 <!--<li class="{{ Request::is('recrupment') ? 'active' : '' }}"><a class="waves-effect waves-cyan " href="{{ url('/recrupment') }}" ><i class="material-icons"  style="color:#6c5ffc  ;">control_point</i><span class="menu-title" data-i18n="User Profile" style="color: #282f53; ";>Recruitment</span></a>-->
</li>

 <li class="{{ Request::is('employeeList') ? 'active' : '' }} || {{ Request::is('addEmployee') ? 'active' : '' }} "><a class="waves-effect waves-cyan " href="{{ url('/employeeList') }}" ><i class="material-icons"  style="color:#6c5ffc ;">person_add</i><span class="menu-title" data-i18n="User Profile" style="color: #282f53";>Employee</span></a>
</li>

<!--<li class="{{ Request::is('Onbording') ? 'active' : '' }}"><a class="waves-effect waves-cyan "  href="{{ url('/Onbording') }}"><i class="material-icons"  style="color:#6c5ffc ;">person</i><span class="menu-title" data-i18n="User Profile" style="color: #282f53";>Onboarding</span></a>-->
</li>

 <li class="{{ Request::is('learninganddev') ? 'active' : '' }} || {{ Request::is('addTraning') ? 'active' : '' }} || {{ Request::is('addmonthlytraining') ? 'active' : '' }} || {{ Request::is('addmonthlyTraningInfo') ? 'active' : '' }} "><a class="waves-effect waves-cyan " href="{{ url('/learninganddev') }}" ><i class="material-icons" style="color:#6c5ffc ;">local_library</i><span class="menu-title" data-i18n="Invoice" style="color: #282f53";>Learning</span></a>
</li>

 <li class="{{ Request::is('weekleytimesheet1') ? 'active' : '' }} || {{ Request::is('weekleytimesheet') ? 'active' : '' }} "><a class="waves-effect waves-cyan " href="{{ url('/weekleytimesheet1') }}" ><i class="material-icons" style="color:#6c5ffc ;">check</i><span class="menu-title" data-i18n="ToDo" style="color: #282f53;";>Attendance</span></a>
</li>

<li class="{{ Request::is('manageLeave') ? 'active' : '' }}"><a class="waves-effect waves-cyan " href="{{ url('/manageLeave') }}"><i class="material-icons" style="color:#6c5ffc ;">logout</i><span class="menu-title" data-i18n="Invoice" style="color: #282f53";>Leaves</span></a>
</li>

<!--<li class="{{ Request::is('perfomance') ? 'active' : '' }} || {{ Request::is('addTotalPerfomance') ? 'active' : '' }} || {{ Request::is('addperfomance') ? 'active' : '' }}  "><a class="waves-effect waves-cyan " href="{{ url('/perfomance') }}" ><i class="material-icons" style="color:#6c5ffc ;">score</i><span class="menu-title" data-i18n="File Manager" style="color: #282f53";>Performance</span></a>-->
<!--</li>-->
 <!--<li class="{{ Request::is('seperationadmin') ? 'active' : '' }} || {{ Request::is('resignation') ? 'active' : '' }} "><a class="waves-effect waves-cyan " href="{{ url('/seperationadmin') }}" ><i class="material-icons"  style="color:#6c5ffc ;">person_remove</i><span class="menu-title" data-i18n="User Profile" style="color: #282f53";>Seperation</span></a>-->
</li>

<!--Account Section Start-->
<li class="navigation-header"><a class="navigation-header-text" style="color: #2B547E;">Accounts</a><i class="navigation-header-icon material-icons">more_horiz</i>
</li>

 <li class="{{ Request::is('payrollIndex') ? 'active' : '' }} || {{ Request::is('payroll1') ? 'active' : '' }} ||  {{ Request::is('payroll') ? 'active' : '' }} "><a class="waves-effect waves-cyan " href="{{ url('/payrollIndex') }}"><i class="material-icons"  style="color:#6c5ffc ;">monetization_on</i><span class="menu-title" data-i18n="User Profile" style="color: #282f53";>PayRoll</span></a>
</li>

      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->
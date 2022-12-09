

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
         <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="indexE.html"><span class="logo-text hide-on-med-and-down">EMS</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
 <!--<h1 class="logo-wrapper"><a class="brand-logo darken-1" href="indexE.html"><img class="hide-on-med-and-down" src="{{ asset('Admin/app-assets/images/logo/EMS_logo_-_Copy-removebg-preview.png')}}" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="{{ asset('Admin/app-assets/images/logo/EMS_logo_-_Copy-removebg-preview.png')}}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">EMS</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>-->
      </div>
    
      
           <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">


      
        <!-- <li class="active"><a class="active" href="dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Dashboard</span></a>-->
        <!--</li> -->

        <li class="navigation-header"><a class="navigation-header-text" style="color:  #2B547E;">Employee Dashboard</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        
        <!--1st point-->
          <li class="{{ Request::is('indexE') ? 'active' : '' }}"><a class="waves-effect waves-cyan nav-link1 " href="{{ url('/indexE') }}" ><i class="material-icons" style="color :#6c5ffc  ;">format_list_bulleted</i><span class="menu-title " data-i18n="Kanban" style="color: #2B547E";>Dashboard</span></a>
        </li>
         <li class="{{ Request::is('EmpTask') ? 'active' : '' }}"><a class="waves-effect waves-cyan  nav-link1" href="{{ url('/EmpTask') }}"><i class="material-icons" style="color :#6c5ffc  ;">content_paste</i><span class="menu-title" data-i18n="File Manager" style="color:#2B547E ";>Task Information</span></a>
        </li>
        
         <li class="{{ Request::is('EmpDailyTimeSheet') ? 'active' : '' }} || {{ Request::is('addTimesheet') ? 'active' : '' }}   "><a class="waves-effect waves-cyan nav-link1" href="{{ url('/EmpDailyTimeSheet') }}" ><i class="material-icons"  style="color :#6c5ffc  ;">check</i><span class="menu-title" data-i18n="Calendar" style="color:#2B547E ";>Timesheet</span></a>
        </li>
        <li class="{{ Request::is('empTraning') ? 'active' : '' }} || {{ Request::is('empmonthlytrainning') ? 'active' : '' }} "><a class="waves-effect waves-cyan nav-link1 " href="{{ url('/empTraning') }}" ><i class="material-icons" style="color :#6c5ffc  ;">local_library</i><span class="menu-title" data-i18n="File Manager"  style="color:#2B547E ";>Learning</span></a>
        </li>
        <!--  <li class="{{ Request::is('performanceemployee') ? 'active' : '' }} || {{ Request::is('empperformancedetail') ? 'active' : '' }}"><a class="waves-effect waves-cyan nav-link1" href="{{ url('/performanceemployee') }}" ><i class="material-icons" style="color :#6c5ffc  ;">trending_up</i><span class="menu-title" data-i18n="File Manager" style="color:#2B547E ";>Performance</span></a>-->
        <!--</li>-->
         <li class="{{ Request::is('attendence') ? 'active' : '' }}"><a class="waves-effect waves-cyan nav-link1" href="{{ url('/attendence') }}" ><i class="material-icons" style="color :#6c5ffc  ;">list_alt</i><span class="menu-title" data-i18n="File Manager"  style="color:#2B547E ";>Attendance</span></a>
        </li>
        <li class="{{ Request::is('ApplyLeave') ? 'active' : '' }} || {{ Request::is('AddLeave') ? 'active' : '' }} "><a class="waves-effect waves-cyan nav-link1" href="{{ url('/ApplyLeave') }}" ><i class="material-icons" style="color :#6c5ffc  ;">logout</i><span class="menu-title" data-i18n="ToDo" style="color:#2B547E ";>Leaves</span></a>
        </li>
          <li class="{{ Request::is('payrolle') ? 'active' : '' }}"><a class="waves-effect waves-cyan nav-link1" href="{{ url('/payrolle') }}" ><i class="material-icons" style="color :#6c5ffc  ;">monetization_on</i><span class="menu-title" data-i18n="File Manager" style="color:#2B547E ";>PayRoll</span></a>
        </li>
            <li class="{{ Request::is('resignationemployee') ? 'active' : '' }} || {{ Request::is('applyresignation') ? 'active' : '' }} "><a class="waves-effect waves-cyan nav-link1" href="{{ url('/resignationemployee') }}" ><i class="material-icons" style="color :#6c5ffc  ;">person_remove</i><span class="menu-title" data-i18n="File Manager" style="color:#2B547E ";>Resignation</span></a>
        </li>
 <!--<li class="bold"><a class="waves-effect waves-cyan " href="{{ route('empclient')}}"><i class="material-icons" style="color :#6c5ffc   ;">person</i><span class="menu-title" data-i18n="File Manager" style="color:#2B547E ";>Client</span></a>-->
        <!--</li>-->

      


   
      </ul>
     
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    
    <!-- END: SideNav-->
    
    
    
    
    
    
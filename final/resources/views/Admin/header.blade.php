 <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">
           
            <ul class="navbar-list right">
             
              
              <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
            
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png') }}" alt="avatar"><i></i></span></a></li>

            </ul>

             <!-- profile-dropdown-->
             <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="{{route('adminProfile')}}"><i class="material-icons">person_outline</i> Profile</a></li>

              <li><a class="grey-text text-darken-1" href="{{route('logOut')}}"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
          <!--<nav class="display-none search-sm">-->
          <!--  <div class="nav-wrapper">-->
          <!--    <form id="navbarForm">-->
          <!--      <div class="input-field search-input-sm">-->
          <!--        <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Searcsh" data-search="template-list">-->
          <!--        <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>-->
          <!--        <ul class="search-list collection search-list-sm display-none"></ul>-->
          <!--      </div>-->
          <!--    </form>-->
          <!--  </div>-->
          <!--</nav>-->
        </nav>
      </div>
    </header>
    <!-- END: Header-->
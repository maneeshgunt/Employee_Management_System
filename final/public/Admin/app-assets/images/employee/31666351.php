<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

  <title>Scriptika</title>
  <link rel="apple-touch-icon" href="./app-assets/images/favicon/scriptika.png">
  <link rel="shortcut icon" type="image/x-icon" href="./app-assets/images/favicon/scriptika.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="./app-assets/vendors/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="./app-assets/vendors/flag-icon/css/flag-icon.min.css">
  <link rel="stylesheet" type="text/css" href="./app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="./app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="./app-assets/vendors/data-tables/css/select.dataTables.min.css">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/vertical-modern-menu-template/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="./app-assets/css/themes/vertical-modern-menu-template/style.min.css">
  <link rel="stylesheet" type="text/css" href="./app-assets/css/pages/data-tables.min.css">
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="./app-assets/css/custom/custom.css">
  <!-- END: Custom CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
          <div class="nav-wrapper">
            <div class="header-search-wrapper hide-on-med-and-down"><i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Search" data-search="template-list">
              <ul class="search-list collection display-none"></ul>
            </div>
            <ul class="navbar-list right">
             
              
              <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
            
              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="./app-assets/images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>

            </ul>
         
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              <li><a class="grey-text text-darken-1" href="adminProfile.html"><i class="material-icons">person_outline</i> Profile</a></li>

              <li><a class="grey-text text-darken-1" href="user-login.html"><i class="material-icons">keyboard_tab</i> Logout</a></li>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form id="navbarForm">
                <div class="input-field search-input-sm">
                  <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Explore Materialize" data-search="template-list">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                  <ul class="search-list collection search-list-sm display-none"></ul>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="./app-assets/images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="./app-assets/images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="./app-assets/images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="./app-assets/images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="./app-assets/images/avatar/avatar-7.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="./app-assets/images/avatar/avatar-8.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="./app-assets/images/avatar/avatar-10.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="./app-assets/images/avatar/avatar-12.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
          </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.html"><img class="hide-on-med-and-down" src="./app-assets/images/logo/Scriptika_logo_-_Copy-removebg-preview.png" alt="materialize logo"/><img class="show-on-medium-and-down hide-on-med-and-up" src="./app-assets/images/logo/Scriptika_logo_-_Copy-removebg-preview.png" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Scriptika</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
       
      
        <!-- <li class="active"><a class="active" href="dashboard-modern.html"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Modern">Dashboard</span></a>
        </li> -->

        <li class="bold"><a class="waves-effect waves-cyan " href="index.html"><i class="material-icons">format_list_bulleted</i><span class="menu-title" data-i18n="Kanban">Dashboard</span></a>
        </li>


        <li class="bold"><a class="waves-effect waves-cyan " href="employee.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">Daily Timesheet</span></a>
        </li>
      
        <li class="bold"><a class="waves-effect waves-cyan " href="AdminEmployeeInfo.html"><i class="material-icons">check</i><span class="menu-title" data-i18n="ToDo">Manage Employee</span></a>
        </li>

        <li class="bold"><a class="waves-effect waves-cyan " href="ManageLeave.html"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Manage Leaves</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="managesalary.html"><i class="material-icons">receipt</i><span class="menu-title" data-i18n="Invoice">Manage Salary</span></a>
        </li>
        <li class="bold"><a class="waves-effect waves-cyan " href="project-creation.html"><i class="material-icons">content_paste</i><span class="menu-title" data-i18n="File Manager">Project Creation</span></a>
        </li>

        
       
        <li class="bold"><a class="waves-effect waves-cyan " href="EmployeeList.html"><i class="material-icons">person_outline</i><span class="menu-title" data-i18n="User Profile"></span>Add Employee</span></a>
        </li>


    

      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Daily Timesheet</span></h5>
                <!-- <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Table</a>
                  </li>
                  <li class="breadcrumb-item active">DataTable
                  </li>
                </ol> -->
              </div>
              <!-- <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">
  <!-- <div class="card">
    <div class="card-content">
      <p class="caption mb-0">Tables are a nice way to organize a lot of data. We provide a few utility classes to help
        you style your table as easily as possible. In addition, to improve mobile experience, all tables on
        mobile-screen widths are centered automatically.</p>
    </div>
  </div> -->
  <!-- DataTables example -->
 


 

  <!-- Page Length Options -->
  <div class="row">
    <div class="col s12">
      <div class="card">
        
        <div class="card-content">
          <!-- <h4 class="card-title">Page Length Options</h4> -->
          <a href="addTimesheet.html"><button class="btn waves-effect waves-light cyan btn-sm" type="submit" name="action">Add TimeSheet</button></a>
       
       
         
       
          <br><br>
          <div class="row">
            <div class="col s11">
                <table id="page-length-option" class="display">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Date</th>
                        <th>Employee Id</th>
                        <th>Department Name</th>
                        <th>Employee Name</th>
                        
                        <th>Project Name</th>
                        <th>1st Hr</th>
                        <th>2nd Hr</th>
                        <th>3rd Hr</th>
                        <th>4th Hr</th>
                        <th>5th Hr</th>
                        <th>6th Hr</th>
                        <th>7th Hr</th>
                        <th>8th Hr</th>
                        <th>9th Hr</th>
                        <th>10th Hr</th>
                        <th>11th Hr</th>
                        <th>12th Hr</th>
                      
                        <th>In Time</th>
                        <th>Out Time</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td>1</td>
                        <td>22-7-2022</td>
                        <td>12002</td>
                        <td>Front 
                            End</td>

                         
                        <td>Sagar Dhumal</td>
                        <td>Scriptika HRMS</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                        <td>abc</td>
                      
                        <td>8:00 am</td>
                        <td>6:00 pm</td>
                        
                        
                        <td>
                           
                            <button class="btn waves-effect waves-light btn-sm" type="submit" name="action"><i class="fa fa-trash-o"></i></button>
         
                            
    
                           </td>
                     
                      </tr>
                    
                    
                     
    
                     
                    
                    </tbody>
                 
                  </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  

  


  
</div><!-- START RIGHT SIDEBAR NAV -->


          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->




<!--/ Theme Customizer -->


    
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2022          <a href="#" target="_blank">SCRIPTIKA</a> All rights reserved.</span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="./app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="./app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="./app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="./app-assets/vendors/data-tables/js/dataTables.select.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="./app-assets/js/plugins.min.js"></script>
    <script src="./app-assets/js/search.min.js"></script>
    <script src="./app-assets/js/custom/custom-script.min.js"></script>
    <script src="./app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="./app-assets/js/scripts/data-tables.min.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/table-data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Nov 2021 11:10:44 GMT -->
</html>
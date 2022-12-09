<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
 
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    

    <title>EMS</title>
 <link rel="apple-touch-icon" href="{{ asset('Admin/app-assets/images/favicon/EMS.png')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Admin/app-assets/images/favicon/EMS.png')}}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/animate-css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/chartist-js/chartist.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css') }}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/materialize.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/pages/dashboard-modern.css') }}">
    
    
    
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/pages/intro.min.css') }}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/custom/custom.css') }}">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

  @if(!empty($success))
  <div class="alert alert-success"> {{ $success }}</div>
@endif

@include('Admin.header')
         
           
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/pdf-image.png') }}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/doc-image.png') }}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/xls-image.png') }}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/jpg-image.png') }}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png') }}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-8.png') }}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-10.png') }}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-12.png') }}" width="30" alt="sample image"></div>
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

@include('Admin.sidebardemo')

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <div class="section">
   <!-- Current balance & total transactions cards-->
 <div class="row">
      <div class="col s12 m6 l4">
         <div class="card padding-4 animate fadeLeft">
            <div class="row">
               <div class="col s5 m5">
                   @php 
                   
                     $total = DB::table('employees')->select('employees.*')->get();
                      
                   @endphp
                  <h5 class="mb-0">{{ count($total) }}</h5>
                  <p class="no-margin">Total Employee</p>
               </div>
               <div class="col s7 m7 right-align">
                  <i
                     class="material-icons  background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">account_box</i>
                   
               </div>
            </div>
         </div>
         <!-- <div id="chartjs" class="card pt-0 pb-0 animate fadeLeft">
            <div class="dashboard-revenue-wrapper padding-2 ml-2">
               <span class="new badge gradient-45deg-indigo-purple gradient-shadow mt-2 mr-2">+ $900</span>
               <p class="mt-2 mb-0 font-weight-600">Today's revenue</p>
               <p class="no-margin grey-text lighten-3">$40,512 avg</p>
               <h5>$ 22,300</h5>
            </div>
            <div class="sample-chart-wrapper card-gradient-chart">
               <canvas id="custom-line-chart-sample-three" class="center"></canvas>
            </div>
         </div> -->
      </div>
      
     <!-- <div class="col s12 m6 l4">-->
     <!--   <div class="card padding-4 animate fadeLeft">-->
     <!--      <div class="row">-->
     <!--         <div class="col s5 m5">-->
                
     <!--            <h5 class="mb-0">5</h5>-->
     <!--            <p class="no-margin">Total Clients</p>-->
                 
     <!--         </div>-->
     <!--         <div class="col s7 m7 right-align">-->
     <!--            <i-->
     <!--               class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">developer_board</i>-->
                
     <!--         </div>-->
     <!--      </div>-->
     <!--   </div>-->
       
     <!--</div>-->

     <!-- <div class="col s12 m6 l4">
      <div class="card padding-4 animate fadeLeft">
         <div class="row">
            <div class="col s5 m5">
               <h5 class="mb-0">1885</h5>
               <p class="no-margin">New</p>
               <p class="mb-0 pt-8">1,12,900</p>
            </div>
            <div class="col s7 m7 right-align">
               <i
                  class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">perm_identity</i>
               <h6 class="mb-0">Pending Leave</h6>
            </div>
         </div>
      </div>
    
   </div> -->

   <div class="col s12 m6 l4">
    <div class="card padding-4 animate fadeLeft">
       <div class="row">
          <div class="col s5 m5">
              @php 
                   
                     $total = DB::table('teams')->select('teams.*')->get();
                      
                   @endphp
             <h5 class="mb-0">{{count($total)}}</h5>
             <p class="no-margin">Total Teams</p>
             
          </div>
          <div class="col s7 m7 right-align">
             <i
                class="material-icons background-round mt-5 mb-5 gradient-45deg-purple-amber gradient-shadow white-text">event_available</i>
            
          </div>
       </div>
    </div>
   
 </div>
   </div>
   <!--/ Current balance & total transactions cards-->

   <!-- User statistics & appointment cards-->
 
   <!--/ Current balance & appointment cards-->

  
</div><!-- START RIGHT SIDEBAR NAV -->

<!-- END RIGHT SIDEBAR NAV --><!-- Intro -->


<!-- / Intro -->
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->




<!--/ Theme Customizer -->


    
    <!-- BEGIN: Footer-->
 @include('Admin.footer')


    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('Admin/app-assets/js/vendors.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('Admin/app-assets/vendors/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('Admin/app-assets/vendors/chartist-js/chartist.min.js') }}"></script>
    <script src="{{ asset('Admin/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('Admin/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js') }}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('Admin/app-assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('Admin/app-assets/js/search.min.js') }}"></script>
    <script src="{{ asset('Admin/app-assets/js/custom/custom-script.min.js') }}"></script>
    <script src="{{ asset('Admin/app-assets/js/scripts/customizer.min.js') }}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('Admin/app-assets/js/scripts/dashboard-modern.js') }}"></script>
    <script src="{{ asset('Admin/app-assets/js/scripts/intro.min.js') }}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>


</html>
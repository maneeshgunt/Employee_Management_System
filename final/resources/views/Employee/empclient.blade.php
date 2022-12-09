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
   
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/chartist-js/chartist.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/chartist-js/chartist-plugin-tooltip.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/pages/dashboard-modern.css')}}">
    
    
    
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/pages/intro.min.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->

    <style>
      
.main{
	width: 100%;
	
}
.one{
	background-color: #f4f5f7;
	border-radius: 5px;
}
.dotdot{
	font-size:10% !important;
	font-weight: lighter !important;
	color: #76787b;
}
.name{
	font-size: 1.5rem;
	color: black;
	font-weight: 600;
}
.mail{
	font-size: 1rem;
	font-weight: 500;
	color: black;
}
.total{
	font-size: 1rem;
	font-weight: 500;
	color: black;
}
.money{
	font-size: 1rem;
	font-weight: 600;
	color: black;
}
.details{
	font-size: 8px;
	font-weight: 500;
	color: #0606b5;
}
.right{
	font-size: 12px;
	color: #0606b5;
}
    </style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">


  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('Employee.headerE')
    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/pdf-image.png')}}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/doc-image.png')}}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/xls-image.png')}}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/jpg-image.png')}}" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-8.png')}}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-10.png')}}" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-12.png')}}" width="30" alt="sample image"></div>
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
    @include('Employee.sidebarE')
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">

      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
      
        <div class="col s12">
          <div class="container">
            <div class="section">
   <!-- users view media object start -->
   <!-- <div class="card-panel" style=" text-align: center;
   width: 30%; padding: 1%;">
    <div class="row" style="display: flex; flex-direction: column; ">
        <a href="app-email.html" class="" style="margin-left: 70%;"><i class="material-icons">mail_outline</i></a>
      <div class="col m12 ">
        <div class="">
          <a href="#" class="avatar">
            <img src="../../.{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" alt="users view avatar" class="z-depth-4 circle"
              height="64" width="64">
          </a>
          <div class="media-body">
            <h6 class="media-heading">
              <span class="users-view-name">Dean Stanley </span>
              <span class="grey-text">@</span>
              <span class="users-view-username grey-text">candy007</span>
            </h6>
            <span>ID:</span>
            <span class="users-view-id">305</span>
          </div>
        </div>
      </div>
      <div class="">
        <a href="app-email.html" class="btn-small btn-light-indigo"><i class="material-icons">mail_outline</i></a>
        <a href="user-profile-page.html" class="btn-small btn-light-indigo">Profile</a>
       
      </div>
    </div>
  </div> -->
  <div class="container ">
    <div class="main">
   		
   
      <div class="row mt-8">
        
        <div class="col-md-3">
      
                       
            
          <div class="one"  style="margin-bottom: 10%;">
            <div class="text-right pr-2 pt-1"><!-- Dropdown Trigger -->
                        
                        </div>
            <div class="d-flex justify-content-center pt-2"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" width="50" class="rounded-circle"></div>
            <div class="text-center">
              <span class="name">Global Technologies</span>
              
            </div>
            <div class="text-center">
              <span>project Head</span>
              <span class="total d-block pt-2">Shubham Mohite</span>
              
            </div>
                      <div class="text-center align-items-center d-flex justify-content-center pt-2 pb-3">
                         
                          <a href="empclientview.html" class="btn-small btn-light-indigo">View Details</a>
                         
                        </div>
                      
          </div>
        
  
  
          <div class="one"  style="margin-bottom: 10%;">
            <div class="text-right pr-2 pt-1"><!-- Dropdown Trigger -->
                        
                        </div>
            <div class="d-flex justify-content-center pt-2"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" width="50" class="rounded-circle"></div>
            <div class="text-center">
              <span class="name">Global Technologies</span>
              
            </div>
            <div class="text-center">
              <span>project Head</span>
              <span class="total d-block pt-2">Shubham Mohite</span>
              
            </div>
                      <div class="text-center align-items-center d-flex justify-content-center pt-2 pb-3">
                         
                          <a href="empclientview.html" class="btn-small btn-light-indigo">View Details</a>
                         
                        </div>
                      
          </div>
        
  
        </div>
  
  
  
  
  
              <div class="col-md-3">
          
      
                       
            
                <div class="one"  style="margin-bottom: 10%;">
                  <div class="text-right pr-2 pt-1"><!-- Dropdown Trigger -->
                              
                              </div>
                  <div class="d-flex justify-content-center pt-2"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" width="50" class="rounded-circle"></div>
                  <div class="text-center">
                    <span class="name">Global Technologies</span>
                    
                  </div>
                  <div class="text-center">
                    <span>project Head</span>
                    <span class="total d-block pt-2">Shubham Mohite</span>
                    
                  </div>
                            <div class="text-center align-items-center d-flex justify-content-center pt-2 pb-3">
                               
                                <a href="empclientview.html" class="btn-small btn-light-indigo">View Details</a>
                               
                              </div>
                            
                </div>
        
  
  
                <div class="one"  style="margin-bottom: 10%;">
                  <div class="text-right pr-2 pt-1"><!-- Dropdown Trigger -->
                              
                              </div>
                  <div class="d-flex justify-content-center pt-2"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" width="50" class="rounded-circle"></div>
                  <div class="text-center">
                    <span class="name">Global Technologies</span>
                    
                  </div>
                  <div class="text-center">
                    <span>project Head</span>
                    <span class="total d-block pt-2">Shubham Mohite</span>
                    
                  </div>
                            <div class="text-center align-items-center d-flex justify-content-center pt-2 pb-3">
                               
                                <a href="empclientview.html" class="btn-small btn-light-indigo">View Details</a>
                               
                              </div>
                            
                </div>
        
  
        </div>
  
  
  
  
  
  
              <div class="col-md-3">
          
            
                <div class="one"  style="margin-bottom: 10%;">
                  <div class="text-right pr-2 pt-1"><!-- Dropdown Trigger -->
                              
                              </div>
                  <div class="d-flex justify-content-center pt-2"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" width="50" class="rounded-circle"></div>
                  <div class="text-center">
                    <span class="name">Global Technologies</span>
                    
                  </div>
                  <div class="text-center">
                    <span>project Head</span>
                    <span class="total d-block pt-2">Shubham Mohite</span>
                    
                  </div>
                            <div class="text-center align-items-center d-flex justify-content-center pt-2 pb-3">
                               
                                <a href="empclientview.html" class="btn-small btn-light-indigo">View Details</a>
                               
                              </div>
                            
                </div>
        
  
  
                <div class="one"  style="margin-bottom: 10%;">
                  <div class="text-right pr-2 pt-1"><!-- Dropdown Trigger -->
                              
                              </div>
                  <div class="d-flex justify-content-center pt-2"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" width="50" class="rounded-circle"></div>
                  <div class="text-center">
                    <span class="name">Global Technologies</span>
                    
                  </div>
                  <div class="text-center">
                    <span>project Head</span>
                    <span class="total d-block pt-2">Shubham Mohite</span>
                    
                  </div>
                            <div class="text-center align-items-center d-flex justify-content-center pt-2 pb-3">
                               
                                <a href="empclientview.html" class="btn-small btn-light-indigo">View Details</a>
                               
                              </div>
                            
                </div>
        
  
        </div>
  
  
  
              <div class="col-md-3">
          
      
                       
            
                <div class="one"  style="margin-bottom: 10%;">
                  <div class="text-right pr-2 pt-1"><!-- Dropdown Trigger -->
                              
                              </div>
                  <div class="d-flex justify-content-center pt-2"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" width="50" class="rounded-circle"></div>
                  <div class="text-center">
                    <span class="name">Global Technologies</span>
                    
                  </div>
                  <div class="text-center">
                    <span>project Head</span>
                    <span class="total d-block pt-2">Shubham Mohite</span>
                    
                  </div>
                            <div class="text-center align-items-center d-flex justify-content-center pt-2 pb-3">
                               
                                <a href="empclientview.html" class="btn-small btn-light-indigo">View Details</a>
                               
                              </div>
                            
                </div>
        
  
  
                <div class="one"  style="margin-bottom: 10%;">
                  <div class="text-right pr-2 pt-1"><!-- Dropdown Trigger -->
                              
                              </div>
                  <div class="d-flex justify-content-center pt-2"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-15.png')}}" width="50" class="rounded-circle"></div>
                  <div class="text-center">
                    <span class="name">Global Technologies</span>
                    
                  </div>
                  <div class="text-center">
                    <span>project Head</span>
                    <span class="total d-block pt-2">Shubham Mohite</span>
                    
                  </div>
                            <div class="text-center align-items-center d-flex justify-content-center pt-2 pb-3">
                               
                                <a href="empclientview.html" class="btn-small btn-light-indigo">View Details</a>
                               
                              </div>
                            
                </div>
        
  
        </div>
  
  
  
  
        
        
      
  
  
      </div>
  
    </div>
	
</div>
  <!-- users view media object ends -->
 
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

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2022          <a href="#" target="_blank">EMS</a> All rights reserved.</span></div>
      </div>
    </footer>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('Admin/app-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('Admin/app-assets/vendors/chartjs/chart.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/vendors/chartist-js/chartist.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('Admin/app-assets/js/plugins.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/search.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/custom/custom-script.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/scripts/customizer.min.js')}}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('Admin/app-assets/js/scripts/dashboard-modern.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/scripts/intro.min.js')}}"></script>
    <!-- END PAGE LEVEL JS-->



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </body>


</html>
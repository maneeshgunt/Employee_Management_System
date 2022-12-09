<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
      
        <title>EMS</title>
        <link rel="apple-touch-icon" href="{{ asset('Admin/app-assets/images/favicon/EMS.png')}}">
         <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Admin/app-assets/images/favicon/EMS.png')}}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- BEGIN: VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/vendors.min.css')}}">
        <link rel="stylesheet" href="{{ asset('Admin/app-assets/vendors/select2/select2.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{ asset('Admin/app-assets/vendors/select2/select2-materialize.css')}}" type="text/css">
        <!-- END: VENDOR CSS-->
        <!-- BEGIN: Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/materialize.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/style.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/pages/form-select2.min.css')}}">
        <!-- END: Page Level CSS-->
        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/custom/custom.css')}}">
        <!-- END: Custom CSS-->

        <script>
               function changeSelection(value){

var length = document.getElementById("ch").options.length;

if(value == 0){
for(var i = 1;i<length;i++)
  document.getElementById("ch").options[i].selected = "selected";

document.getElementById("ch").options[0].selected = "";
}

}
        </script>
      </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('Admin.header')
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
    @include('Admin.sidebardemo')
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span> Add Test  </span></h5>
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
        <form action="{{ route('addtrainingInfo')}}" method="post" enctype="multipart/form-data">
          @csrf
        <div class="card-content">
          <!-- <h4 class="card-title">Page Length Options</h4> -->
          <!-- <a href="#modal1" class="btn modal-trigger"><button class="btn waves-effect waves-light btn-sm" type="button" name="action" >Add Project</button></a> -->
       
         
       
          <br><br>
          <div class="row">
            <div class=" col s6">
          <label>Departments
          <select name="departments">
                  <option value=" " disabled selected>Select Department</option>
                  <option value="Frontend" >Frontend</option>
                  <option value="Backend" >Backend</option>
                  <option value="Mobile App" >Mobile App</option>
                  <option value="Tester" >Tester</option>
                  <option value="Digital Marketing" >Digital Marketing</option>
                  <option value="Technical Support" >Technical Support</option>
                </select>
            </label>
             @if($errors->has('departments'))
                  <span class="text-danger">{{ $errors->first('departments') }}</span>
                @endif
            </div>
            <div class=" col s6">
                <p>Select Employee</p>
                <div class="input-field">
                    @php 
                   $member = DB::table('employees')->select('id','full_name')->get();
                  @endphp
                    <select class="select2 browser-default" multiple name="employee[]" >
                
                
                          <option value="" disabled selected>Choose your Employee</option>
                          @foreach($member as $mem)
                          <option value="{{ $mem->id }}">{{ $mem->full_name }}</option>
                          @endforeach
                </select>
                 @if($errors->has('employee'))
                  <span class="text-danger">{{ $errors->first('employee') }}</span>
                @endif
                </div>
          </div>
          </div>
          <div class="row">
           
              <div class="row">
                <div class="input-field col s6">
                    <label >Select Month</label><br><br>
                  <input id="icon_telephone3"  name="month" type="month" style="width: 100%;border-left:none;border-right:none;border-top:none">
                  
                  @if($errors->has('month'))
                  <span class="text-danger">{{ $errors->first('month') }}</span>
                @endif
                </div>
               
                <div class="input-field col s6">
                    <div class="file-field input-field">
                        <div class="btn">
                          <span>Upload Test File</span>
                          <input type="file" name="trainingfile">
                           
                        </div>
                        @if($errors->has('trainingfile'))
                  <span class="text-danger">{{ $errors->first('trainingfile') }}</span>
                @endif
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text" >
                           @if($errors->has('mark_list'))
                  <span class="text-danger">{{ $errors->first('mark_list') }}</span>
                @endif
                        </div>
                   
                      </div>
                  
                 
                </div>

             
              </div>


            
             

              <div class="row">
               
                <div class="input-field col s6">
                
                  <label >Submission Date</label><br>
                <input id="icon_telephone6" type="date" class="validate" name="submissiondate">
                 @if($errors->has('submissiondate'))
                  <span class="text-danger">{{ $errors->first('submissiondate') }}</span>
                @endif
                
               
              </div>



                <div class="input-field col s6">
                
                    <label >Comments</label><br>
                  <input id="icon_telephone8" type="Text" class="validate" name="comments">
                   @if($errors->has('comments'))
                  <span class="text-danger">{{ $errors->first('comments') }}</span>
                @endif
                 
                </div>
               
             

             
              </div>


             

              <div class="row">
                <div class="input-field col s6">
        
                 <button class="btn waves-effect waves-light cyan btn-sm" type="submit" name="action">Submit</button>
                 <!--<button class="btn waves-effect waves-light danger btn-sm" type="submit" name="action">Cancel</button>-->
                 <a href="{{ url('addmonthlytraining') }}"  class="btn waves-effect waves-light  btn-sm">Cancel</a>
                 
                </div>
                
              </div>

          
          </div>
        </div>
</form>
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
    <script src="{{ asset('Admin/app-assets/vendors/select2/select2.full.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('Admin/app-assets/js/plugins.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/search.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/custom/custom-script.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/scripts/customizer.min.js')}}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('Admin/app-assets/js/scripts/form-select2.min.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>


</html>
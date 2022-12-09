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
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/vendors.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/data-tables/css/select.dataTables.min.css')}}">
  <!-- END: VENDOR CSS-->
  <!-- BEGIN: Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/materialize.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/style.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/pages/data-tables.min.css')}}">
  <!-- END: Page Level CSS-->
  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/custom/custom.css')}}">
  <!-- END: Custom CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
   <script>
     function addCode() {
            document.getElementById("add_to_me").innerHTML += 
              "<div class='row ' id='add_to_me'><div class='input-field col s6'> <input id='icon_prefix' type='text' class='validate'><label for='icon_prefix'>Modules</label><button class='btn waves-effect waves-light btn-sm ' type='button' name='action' onclick='addCode()'>Add More</button></div><div class='input-field col s6'><input id='icon_telephone' type='text' class='validate'><label for='icon_telephone'>Activity</label></div></div>";
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Add Employee Details</span></h5>
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
          <!-- <a href="#modal1" class="btn modal-trigger"><button class="btn waves-effect waves-light btn-sm" type="button" name="action" >Add Project</button></a> -->
       
         
       
          <br><br>
          <div class="row">
          <form action="{{route('addEmp')}}" method="post" class="col s12" enctype="multipart/form-data">
                        @csrf
              <div class="row">
                <div class="input-field col s6">
        
                <input id="NameF" type="Text" class="validate" name="full_name" value="{{old('full_name')}}">
                            <label for="NameF">Full Name</label>
                            @if($errors->has('full_name'))
                  <span class="text-danger">{{ $errors->first('full_name') }}</span>
                @endif
                </div>
                <div class="input-field col s6">
               
                <input id="Educ" type="Text" class="validate" name="education" value="{{old('education')}}">
                            <label for="Educ">Education</label>
                            @if($errors->has('education'))
                  <span class="text-danger">{{ $errors->first('education') }}</span>
                @endif
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6">
        
                <input id="Addr" type="Text" class="validate" name="address" value="{{old('address')}}">
                            <label for="Addr">Address</label>
                            @if($errors->has('address'))
                  <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                </div>
                <div class="input-field col s6">
               
                <input id="Desig" type="Text" class="validate" name="designation" value="{{old('designation')}}">
                            <label for="Desig">Designation</label>
                            @if($errors->has('designation'))
                  <span class="text-danger">{{ $errors->first('designation') }}</span>
                @endif
                </div>
              </div>

              <div class="row">
                <div class="input-field col s6">
        
                <input id="Email" type="email" class="validate" name="email">
                            <label for="Email">Email</label>
                            @if($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                </div>
                <div class="input-field col s6">
               
                <input id="Maritial" type="text" class="validate" name="maritial_status" value="{{old('maritial_status')}}">
                            <label for="Maritial">Maritial Status</label>
                            @if($errors->has('maritial_status'))
                  <span class="text-danger">{{ $errors->first('maritial_status') }}</span>
                @endif
                </div>
              </div>


              <div class="row">
                <div class="input-field col s6">
        
                <input id="Mob" type="text" class="validate" name="mobile_no" value="{{old('mobile_no')}}">
                            <label for="Mob">Mobile No</label>
                            @if($errors->has('mobile_no'))
                  <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                @endif
                </div>
                <div class="input-field col s6">
               
                <input id="BirthD" type="date" class="validate" name="birth_date" value="{{old('birth_date')}}">
                            <label for="BirthD">Birth Date</label>
                            @if($errors->has('birth_date'))
                  <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                @endif
                </div>
              </div>


              <div class="row">
                <div class="input-field col s6">
        
                <input id="Blood" type="text" class="validate" name="blood_group" value="{{old('blood_group')}}">
                            <label for="Blood">Blood Group</label>
                            
                </div>
                <div class="input-field col s6">
               
                <input id="Join" type="date" class="validate" name="joining_date" value="{{old('joining_date')}}">
                            <label for="Join">Joining Date</label>
                            @if($errors->has('joining_date'))
                  <span class="text-danger">{{ $errors->first('joining_date') }}</span>
                @endif
                </div>
              </div>

              <div class="row">
                   <div class="input-field col s6">
        
                <input id="Emergency" type="text" class="validate" name="emergency_contact_no" value="{{old('emergency_contact_no')}}">
                            <label for="Emergency">Emergency Contact No</label>
                </div>
                
                <div class="input-field col s6">
               
                <input id="Relieving" type="date" class="validate" name="relieving_date" value="{{old('relieving_date')}}">
                            <label for="Relieving">Relieving Date</label>
                </div>
              </div>

              <div class="row">
               <div class="input-field col s6">
        
                <input id="Emplo" type="text" class="validate" name="employee_id" value="{{old('employee_id')}}">
                            <label for="Emplo">Employee ID</label>
                            @if($errors->has('employee_id'))
                  <span class="text-danger">{{ $errors->first('employee_id') }}</span>
                @endif
                </div>
                
                <div class="input-field col s6">
               
                <input id="Gender" type="text" class="validate" name="gender" value="{{old('gender')}}">
                            <label for="Gender">Gender</label>
                            @if($errors->has('gender'))
                  <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
                </div>
                </div>
                
                
                <!--new code for password-->
               <div class="row">
               <div class="input-field col s6">
        
                <input id="Password1" type="password" class="validate" name="password" >
                     <label for="Password1">Password</label>
                      @if($errors->has('password'))
                  <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
                     <span class="text-danger"></span>
                   </div>
                 <div class="input-field col s6">
                     <!--aaa-->
                 </div>
               
               
               
                </div>




          
              <br>
              <h6>Documentation</h6>
              <div class="row">
                <div class="input-field col s6">
                               
                               <br><br>
                               <label for="Aadhar">Aadhar Card</label>
                                  @if($errors->has('aadhar_card'))
                     <span class="text-danger">{{ $errors->first('aadhar_card') }}</span>
                   @endif
                               <input id="Aadhar" type="file" class="validate" name="aadhar_card">
                  
                 
                </div>
                <div class="input-field col s6">
                <label for="Pan">Pan Card</label>
                    
                    <br><br>
                       @if($errors->has('pan_card'))
          <span class="text-danger">{{ $errors->first('pan_card') }}</span>
        @endif
                   
                    <input id="Pan" type="file" class="validate" name="pan_card">
                 
                </div>
              </div>


              <div class="row">
                <div class="input-field col s6">
                <label for="Bank">Bank Passbook/Cheque</label>
                           
                           <br><br>
                            @if($errors->has('bank_passbook_cheque'))
                 <span class="text-danger">{{ $errors->first('bank_passbook_cheque') }}</span>
               @endif
                           <input id="Bank" type="file" class="validate" name="bank_passbook_cheque">
                          
                  
                 
                </div>
                <div class="input-field col s6">
                <label for="Mark ">Mark Sheet</label>
                            
                            <br><br>
                            @if($errors->has('mark_list'))
                  <span class="text-danger">{{ $errors->first('mark_list') }}</span>
                @endif
                            <input id="Mark " type="file" class="validate" name="mark_list">
                 
                </div>
              </div>

              <br>
              <h6>Leave Section</h6>
                 <div class="row">
                 
                <div class="input-field col s6">
                 
                  <input id="Leaves" type="number" class="validate"  name="totalleaves">
                  <label for="Leaves">Total Leaves</label>
                  @if($errors->has('totalleaves'))
                  <span class="text-danger">{{ $errors->first('totalleaves') }}</span>
                @endif
                </div>
                <div class="input-field col s6">
               
                  <input id="paid" type="number" class="validate"  name="paidleaves">
                  <label for="paid">Paid Leaves</label>
                  @if($errors->has('paidleaves'))
                  <span class="text-danger">{{ $errors->first('paidleaves') }}</span>
                @endif
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
        
                  <input id="Unpaid" type="number" class="validate"  name="unpaidleaves">
                  <label for="Unpaid">Unpaid Leaves</label>
                  @if($errors->has('unpaidleaves'))
                  <span class="text-danger">{{ $errors->first('unpaidleaves') }}</span>
                @endif
                </div>
                <div class="input-field col s6">
               
                </div>
              </div>
          
             

              <br>
           


              <div class="">
                <div class="">
        
                    <button class="btn waves-effect waves-light cyan  btn-sm" type="submit" name="action">Submit</button>

                    
                      
                    <a href="{{ route('employeeList')}}" class="btn waves-effect waves-light danger btn-sm" type="submit" name="action">Cancel</a>
                  </div>

             
                
              </div>
              <br>
            </form>
                 
            
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
   @include('Admin.footer')

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('Admin/app-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('Admin/app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/vendors/data-tables/js/dataTables.select.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('Admin/app-assets/js/plugins.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/search.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/custom/custom-script.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/scripts/customizer.min.js')}}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('Admin/app-assets/js/scripts/data-tables.min.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
  </body>


</html>
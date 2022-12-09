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
        <h6 class="search-title">FILES</h6>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/pdf-image.png')}}" width="24" height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
          </div>
          <div class="status"><small class="grey-text">17kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/doc-image.png')}}" width="24" height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
          </div>
          <div class="status"><small class="grey-text">550kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/xls-image.png')}}" width="24" height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
          </div>
          <div class="status"><small class="grey-text">20kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="{{ asset('Admin/app-assets/images/icon/jpg-image.png')}}" width="24" height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
          </div>
          <div class="status"><small class="grey-text">37kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
        <h6 class="search-title">MEMBERS</h6>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}" width="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-8.png')}}" width="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-10.png')}}" width="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle" src="{{ asset('Admin/app-assets/images/avatar/avatar-12.png')}}" width="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
          </div>
        </div>
      </a></li>
  </ul>
  <ul class="display-none" id="page-search-title">
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
        <h6 class="search-title">PAGES</h6>
      </a></li>
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
              <h5 class="breadcrumbs-title mt-0 mb-0"><span>Edit Employee Details</span></h5>
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
                      <form class="col s12" action="{{ route('Update-Employee', $employees->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="password" value="{{ $employees->password }}">
                        <div class="row">
                          <div class="input-field col s6">
                              

                            <input id="NameF" type="Text" class="validate" name="full_name" value="{{$employees->full_name}}">
                            <label for="NameF">Full Name</label>
                          </div>
                          <div class="input-field col s6">

                            <input id="Educ" type="Text" class="validate" name="education" value="{{$employees->education}}">
                            <label for="Educ">Education</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">

                            <input id="Addr" type="Text" class="validate" name="address" value="{{$employees->address}}">
                            <label for="Addr">Address</label>
                          </div>
                          <div class="input-field col s6">

                            <input id="Desig" type="Text" class="validate" name="designation" value="{{$employees->designation}}">
                            <label for="Desig">Designation</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">

                            <input id="Email" type="email" class="validate" name="email" value="{{$employees->email}}">
                            <label for="Email">Email</label>
                          </div>
                          
                          
                          <div class="input-field col s6">

                            <input id="Maritial" type="Text" class="validate" name="maritial_status" value="{{$employees->maritial_status}}">
                            <label for="Maritial">Maritial Status</label>
                          </div>
                        </div>


                        <div class="row">
                          <div class="input-field col s6">

                            <input id="Mob" type="text" class="validate" name="mobile_no" value="{{$employees->mobile_no}}">
                            <label for="Mob">Mobile No</label>
                          </div>
                          <div class="input-field col s6">

                            <input id="BirthD" type="date" class="validate" name="birth_date" value="{{$employees->birth_date}}">
                            <label for="BirthD">Birth Date</label>
                          </div>
                        </div>


                        <div class="row">
                          <div class="input-field col s6">

                            <input id="Blood" type="text" class="validate" name="blood_group" value="{{$employees->blood_group}}">
                            <label for="Blood">Blood Group</label>
                          </div>
                          <div class="input-field col s6">

                            <input id="Join" type="date" class="validate" name="joining_date" value="{{$employees->joining_date}}">
                            <label for="Join">Joining Date</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">

                            <input id="Emplo" type="text" class="validate" name="employee_id" value="{{$employees->employee_id}}">
                            <label for="Emplo">Employee ID</label>
                          </div>
                          <div class="input-field col s6">

                            <input id="Relieving" type="date" class="validate" name="relieving_date" value="{{$employees->relieving_date}}">
                            <label for="Relieving">Relieving Date</label>
                          </div>
                        </div>

                        <div class="row">
                          <div class="input-field col s6">

                            <input id="Emergency" type="text" class="validate" name="emergency_contact_no" value="{{$employees->emergency_contact_no}}">
                            <label for="Emergency">Emergency Contact No</label>
                          </div>
                          <div class="input-field col s6">

                            <input id="Gender" type="text" class="validate" name="gender" value="{{$employees->gender}}">
                            <label for="Gender">Gender</label>
                          </div>
                        </div>


                        <div class="row">
                          <div class="input-field col s6">
                            <label for="Aadhar">Aadhar Card</label>
                            <br><br>
                            <input id="Aadhar" type="file" class="validate" name="aadhar_card" value="{{$employees->aadhar_card}}" style="width:200px;">{{$employees->aadhar_card}}
                            <input id="Aadhar" type="hidden" class="validate" name="aadhar_card" value="{{$employees->aadhar_card}}">
                            <input id="Aadhar" type="hidden" class="validate" name="aadharcard_file" value="{{$employees->aadharcard_file}}">


                          </div>
                          <div class="input-field col s6">
                            <label for="Pan">Pan Card</label>
                            <br><br>
                            <input id="Pan" type="file" class="validate" name="pan_card" value="{{$employees->pan_card}}" style="width:200px;">{{$employees->pan_card}}
                            <input id="Pan" type="hidden" class="validate" name="pan_card" value="{{$employees->pan_card}}">
                            <input id="Pan" type="hidden" class="validate" name="pan_card_file" value="{{$employees->pan_card_file}}">


                          </div>
                        </div>


                        <div class="row">
                          <div class="input-field col s6">
                            <label for="Bank">Bank Passbook/Cheque</label>
                            <br><br>
                            <input id="Bank" type="file" class="validate" name="bank_passbook_cheque" value="{{$employees->bank_passbook_cheque}}" style="width:200px;">{{$employees->bank_passbook_cheque}}
                            <input id="Bank" type="hidden" class="validate" name="bank_passbook_cheque" value="{{$employees->bank_passbook_cheque}}">
                            <input id="Bank" type="hidden" class="validate" name="bank_passbook_cheque_file" value="{{$employees->bank_passbook_cheque_file}}">


                          </div>
                          <div class="input-field col s6">
                            <label for="Mark ">Mark List</label>
                            <br><br>
                            <input id="Mark " type="file" class="validate" name="mark_list" value="{{$employees->mark_list}}" style="width:200px;">{{$employees->mark_list}}
                            <input id="Mark " type="hidden" class="validate" name="mark_list" value="{{$employees->mark_list}}">
                            <input id="Mark " type="hidden" class="validate" name="mark_list_file" value="{{$employees->mark_list_file}}">


                          </div>
                        </div>
                        
                        <br>
                                      <h6>Leave Section</h6>
                 <div class="row">
                 
                <div class="input-field col s6">
                 
                  <input id="Leaves" type="number" class="validate" value="{{$employees->totalleaves}}" name="totalleaves">
                  <label for="Leaves">Total Leaves</label>
                </div>
                <div class="input-field col s6">
               
                  <input id="paid" type="number" class="validate" value="{{$employees->paidleaves}}" name="paidleaves">
                  <label for="paid">Paid Leaves</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
        
                  <input id="Unpaid" type="number" class="validate" value="{{$employees->unpaidleaves}}" name="unpaidleaves">
                  <label for="Unpaid">Unpaid Leaves</label>
                </div>
                <div class="input-field col s6">
               
                </div>
              </div>
          <br>
                        <div class="row">
                          <div class="input-field col s6">

                            <button class="btn waves-effect waves-light cyan btn-sm" type="submit " name="action">Submit</button>
                            <button class="btn waves-effect waves-light  btn-sm" type="submit " name="action">Cancel</button>
                          </div>

                        </div>

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
  <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
      <div class="container"><span>&copy; 2022 <a href="#" target="_blank">EMS</a> All rights reserved.</span></div>
    </div>
  </footer>

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
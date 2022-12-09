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
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/materialize.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/themes/vertical-modern-menu-template/style.min.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/custom/custom.css')}}">
    <!-- END: Custom CSS-->


   
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/pages/dashboard.min.css')}}">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->

    <!-- END: Custom CSS-->

    <!-- DataTable -->
   
  
  
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/flag-icon/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/data-tables/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/vendors/data-tables/css/select.dataTables.min.css')}}">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
 
 
    <link rel="stylesheet" type="text/css" href="{{ asset('Admin/app-assets/css/pages/data-tables.min.css')}}">
    <!-- END: Page Level CSS-->
   
    <!-- Modal -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <style>
    .modal{
      overflow-y: unset !important;
    }
  </style>
  
  
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">



<div id="modal1" class="modal">
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close mr-3 "><i class="fa fa-close" style="font-size:24px"></i></a>
  </div>

  <div class="modal-content">
    <div class="row">
          <h6>Upload Traning File</h6>
      <div class="input-field col m6 s12">
        <div class="file-field input-field">
          <div class="btn">
            <span>File</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
     
        </div>
         
       
       </div>


       <div class="input-field col m6 s12">
        <br>
        <button class="waves-effect waves-light btn  cyan"  >upload</button>
         
       
       </div>

       </div>
  </div>
  
</div>


<div id="proposal" class="modal">
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close mr-3 "><i class="fa fa-close" style="font-size:24px"></i></a>
  </div>
  <div class="modal-content">
     
    <form id="GFG" action="{{ route('uploadMarks')}}" method="post">
        @csrf
    <div class="row">
      <h6>
        Upload Marks
      </h6>
      <br>
      <div class="input-field col m6 s12">
          
       <input id="icon_prefix1" type="text" class="validate" name="marks">
         <label for="icon_prefix1">Enter Marks</label>
@if($errors->has('marks'))
                  <span class="text-danger">{{ $errors->first('marks') }}</span>
                @endif
  
      
      </div>

      <div class="input-field col m6 s12">
       <input id="icon_prefix2" type="text" class="validate" name="comments1">
         <label for="icon_prefix2">Comments</label>
@if($errors->has('comments1'))
                  <span class="text-danger">{{ $errors->first('comments1') }}</span>
                @endif
      </div>
     <div>
         
         <input id="user_id" type="text" name="user_id" hidden>
     </div>
     
    </div>

    <div class="row">
  
 
      <div class="input-field col m6 s12">
   


        <a class="btn waves-effect waves-light cyan btn-sm" type="submit" name="action" onclick="myFunction()">Submit</a>
        <a href="{{ route('addmonthlytraining')}}" class="btn waves-effect waves-light danger btn-sm" type="submit" name="action">Cancel</a>
      </div>
     
    </div>
  </div>
  </form>
   <script>
            function myFunction() {
                document.getElementById("GFG").submit();
            }
        </script>
</div>
</div>



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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Add Monthly Test</span></h5>
                @if ($message = Session::get('success'))
							<div class="alert alert-success alert-block">
							    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>{{ $message }}</strong>
							</div>
							@endif

							@if ($message = Session::get('unsuccess'))
							<div class="alert alert-danger alert-block">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<strong>{{ $message }}</strong>
							</div>
							@endif
                
                
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
       
          <!-- <a href="addEmployee.html"><button class="btn waves-effect waves-light cyan btn-sm" type="submit" name="action">Add Employee</button></a> -->
          <a href="{{ route('addmonthlyTraningInfo')}}"><button class="btn waves-effect waves-light cyan btn-sm" type="submit" name="action">Add  Test</button></a>
          <br><br>
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                 <th style="font-weight: 700;">Id</th>
                 <th style="font-weight: 700;">Name</th>
                 <th style="font-weight: 700;">Department</th>
                 <th style="font-weight: 700;">Month</th>
                 <th style="font-weight: 700;">Submission Date</th>
                 <th style="font-weight: 700;">Test File</th>
                 <th style="font-weight: 700;">View Candidate File</th>
                 <th style="font-weight: 700;">Add Marks</th>
                 <th style="font-weight: 700;">Final Marks</th>
                  <th style="font-weight: 700;"> Comments</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($monthlytrainings as $data)
                  <tr>
                    <td>{{$data->id}}</td>
                   
                    <td> @foreach($data->full_name as $dat){{$loop->iteration}}. {{$dat}}<br>@endforeach</td>
                    
                    <td>{{$data->departments}}</td>
                    <td>{{$data->month}}</td>
                    <td>{{$data->submissiondate}}</td>
                   
                    
                     <td> <a href="{{ url('viewtrainingfile',$data->id) }}" class="waves-effect waves-light btn modal-trigger cyan"  >View</a></td>
                     <!--<td><a href="{{ url('viewcandidatefile',$data->id) }}" class="btn waves-effect waves-light cyan btn-sm">Download  </a></td>-->
                      <td>
                          <a href="{{ url('downloadcandidatefile',$data->candidatefile) }}" class="btn waves-effect waves-light btn-sm cyan" type="submit" name="action"><i class='fa fa-download'></i></button>
                           </td>
                     
                    <td>
                      <!-- <a href="#proposal" class="btn modal-trigger"><button class="btn waves-effect waves-light cyan btn-sm" type="button" name="action"><i class='fa fa-edit'></i></button></a> -->
                    
                      <a class="waves-effect waves-light btn modal-trigger cyan open-proposal1" data-id="{{$data->id}}" date-value="{{$data->id}}" href="#proposal" >Upload Marks</a>
                      

                     </td>
                     <td>{{$data->marks}}</td>
                     <td>{{$data->comments1}}</td>

                    
                    
                  </tr>
                @endforeach
                </tbody>
                <!-- <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Total hrs</th>
                    <th>Team</th>
                    <th>Requirement</th>
                    <th>Action</th>
                  </tr>
                </tfoot> -->
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


    
    <!-- BEGIN: Footer-->

  @include('Admin.footer')
    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('Admin/app-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('Admin/app-assets/vendors/chartjs/chart.min.js')}}"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{ asset('Admin/app-assets/js/plugins.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/search.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/custom/custom-script.min.js')}}"></script>
    <script src="{{ asset('Admin/app-assets/js/scripts/customizer.min.js')}}"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!--<script src="{{ asset('Admin/app-assets/js/scripts/dashboard-ecommerce.min.js')}}"></script>-->
    <!-- END PAGE LEVEL JS-->

    <!-- DataTable -->

     <!-- BEGIN VENDOR JS-->

     <!-- BEGIN VENDOR JS-->
     <!-- BEGIN PAGE VENDOR JS-->
     <script src="{{ asset('Admin/app-assets/vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
     <script src="{{ asset('Admin/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
     <script src="{{ asset('Admin/app-assets/vendors/data-tables/js/dataTables.select.min.js')}}"></script>
     <!-- END PAGE VENDOR JS-->
     <!-- BEGIN THEME  JS-->
     
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
   
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('Admin/app-assets/js/scripts/advance-ui-modals.min.js')}}"></script>
  
     <!-- END THEME  JS-->
     <!-- BEGIN PAGE LEVEL JS-->
     <script src="{{ asset('Admin/app-assets/js/scripts/data-tables.min.js')}}"></script>
    <!-- END PAGE LEVEL JS-->
   <script>
      $(document).on("click", ".open-proposal1", function (e) {

	e.preventDefault();

	var _self = $(this);

	var myId = _self.data('id');
	
	$("#user_id").val(myId);

	$(_self.attr('href')).modal('show');
});
       
   </script>
    
  </body>


</html>
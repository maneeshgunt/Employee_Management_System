<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  
<head>
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
              "<div class='row ' id='add_to_me'><div class='input-field col s6'> <input id='icon_prefix' type='text' class='validate' name='module[]'><label for='icon_prefix'>Modules</label></div><div class='input-field col s6'><input id='icon_telephone' type='text' class='validate' name='activity[]'><label for='icon_telephone'>Activity</label></div><div class='input-field col s6'><input id='Task_Hours' type='text' class='validate' name='task_hours[]'><label for='Task_Hours'>Task Hours</label></div></div>";
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
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Add Task</span></h5>
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
            <form action="{{route('saveTask')}}" method="post" class="col s12">
            @csrf     
            <input type="hidden" value="{{ request('id') }}" name="id">
            <div class="row">
                    <div class="input-field col s6">
                    @php 
                    
                 $projects = DB::table('projects')->select('id','name')->where('id', '=', request('id'))->get();
                  
                 @endphp
                 
                            
                            <input id="SubDate" type="text" value="{{ $projects[0]->name }}" class="validate"  readonly>
                            <input type="hidden" value="{{ $projects[0]->id }}" name="project_name">
                            <label>Project Name</label>
                             @if($errors->has('project_name'))
                  <span class="text-danger">{{ $errors->first('project_name') }}</span>
                @endif
                    </div>
                    <div class="input-field col s6">
               
                  <input id="SubDate" type="Date" class="validate" name="assign_date">
                  <label for="SubDate">Assign Date</label>
                   @if($errors->has('assign_date'))
                  <span class="text-danger">{{ $errors->first('assign_date') }}</span>
                @endif
                </div>
                  </div>
              <div class="row " >
                <div class="input-field col s6">
                  <input id="icon_prefix" type="text" class="validate" name="module[]" />
                  <label for="icon_prefix">Modules</label>
                   @if($errors->has('module[]'))
                  <span class="text-danger">{{ $errors->first('module[]') }}</span>
                @endif
                </div>
                
                <div class="input-field col s6">
               
                  <input id="icon_telephone" type="text" class="validate" name="activity[]" />
                  <label for="icon_telephone">Activity</label>
                   @if($errors->has('activity[]'))
                  <span class="text-danger">{{ $errors->first('activity[]') }}</span>
                @endif
                </div>
              </div>
               <div class="row " >
               <div class="input-field col s6">
                  <input id="Task-hrs" type="text" class="validate" name="task_hours[]">
                  <label for="Task-hrs">Task Hours</label>
                   @if($errors->has('task_hours'))
                  <span class="text-danger">{{ $errors->first('task_hours') }}</span>
                @endif
                </div>
                </div>

              <div id="add_to_me"></div>

              <button class="btn waves-effect waves-light cyan  btn-sm " type="button" name="action" onclick="addCode()">Add More</button>

              <div class="row">
               
                <div class="input-field col s6">
               
                  <input id="Dev-hrs" type="text" class="validate" name="developer_hours">
                  <label for="Dev-hrs">Developer Hours</label>
                   @if($errors->has('developer_hours'))
                  <span class="text-danger">{{ $errors->first('developer_hours') }}</span>
                @endif
                </div>
                   <div class="input-field col s6">
                    
                     <input id="SubDate" type="Date" class="validate" name="submission_date">
                  <label for="SubDate">Submission Date</label>
                   @if($errors->has('submission_date'))
                  <span class="text-danger">{{ $errors->first('submission_date') }}</span>
                @endif
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6">
                 
                     
                     <input id="SubDate" type="text" value="{{ $proj[0]->tname }}" class="validate" name="tname"  readonly>
                
               
                </div>
                
                <div class="input-field col s6">
                     <select multiple  name="team_member[]">
                          <option disabled selected>Choose Your Team Members</option>
                         
                          @foreach(array_combine($proj[0]->mem_id,$proj[0]->full_name) as $t => $m))
                          
                         <option value="{{ $t }}"> {{ $m }} </option>
                        
                         @endforeach
                      </select>
                      <label>Select Team Member</label>
                       @if($errors->has('team_member[]'))
                  <span class="text-danger">{{ $errors->first('team_member[]') }}</span>
                @endif
                 </div>
                
                
              </div>
             
              <br>
              <div class="row">
                <div class="input-field col s6">
                    <button class="btn waves-effect waves-light btn-sm cyan" type="submit" name="action">Submit</button>
                </div>
                
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  

  


  
</div><!-- START RIGHT SIDEBAR NAV -->
<aside id="right-sidebar-nav">
  <div id="slide-out-right" class="slide-out-right-sidenav sidenav rightside-navigation">
    <div class="row">
      <div class="slide-out-right-title">
        <div class="col s12 border-bottom-1 pb-0 pt-1">
          <div class="row">
            <div class="col s2 pr-0 center">
              <i class="material-icons vertical-text-middle"><a href="#" class="sidenav-close">clear</a></i>
            </div>
            <div class="col s10 pl-0">
              <ul class="tabs">
                <li class="tab col s4 p-0">
                  <a href="#messages" class="active">
                    <span>Messages</span>
                  </a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#settings">
                    <span>Settings</span>
                  </a>
                </li>
                <li class="tab col s4 p-0">
                  <a href="#activity">
                    <span>Activity</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="slide-out-right-body row pl-3">
        <div id="messages" class="col s12 pb-0">
          <div class="collection border-none mb-0">
            <input class="header-search-input mt-4 mb-2" type="text" name="Search" placeholder="Search Messages" />
            <ul class="collection right-sidebar-chat p-0 mb-0">
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Elizabeth Elliott</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                </div>
                <span class="secondary-content medium-small">5.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-1.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Mary Adams</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-2.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Caleb Richards</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Hello Boo</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-3.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Caleb Richards</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Keny !</p>
                </div>
                <span class="secondary-content medium-small">9.00 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-4.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">June Lane</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Ohh God</p>
                </div>
                <span class="secondary-content medium-small">4.14 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-5.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Edward Fletcher</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Love you</p>
                </div>
                <span class="secondary-content medium-small">5.15 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-6.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Crystal Bates</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can we</p>
                </div>
                <span class="secondary-content medium-small">8.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Nathan Watts</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Great!</p>
                </div>
                <span class="secondary-content medium-small">9.53 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-8.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Willard Wood</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Do it</p>
                </div>
                <span class="secondary-content medium-small">4.20 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-1.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Ronnie Ellis</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Got that</p>
                </div>
                <span class="secondary-content medium-small">5.20 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-9.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Daniel Russell</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Thank you</p>
                </div>
                <span class="secondary-content medium-small">12.00 AM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-10.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Sarah Graves</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Okay you</p>
                </div>
                <span class="secondary-content medium-small">11.14 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-off avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-11.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Andrew Hoffman</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Can do</p>
                </div>
                <span class="secondary-content medium-small">7.30 PM</span>
              </li>
              <li class="collection-item right-sidebar-chat-item sidenav-trigger display-flex avatar pl-5 pb-0"
                data-target="slide-out-chat">
                <span class="avatar-status avatar-online avatar-50"><img
                    src="{{ asset('Admin/app-assets/images/avatar/avatar-12.png')}}" alt="avatar" />
                  <i></i>
                </span>
                <div class="user-content">
                  <h6 class="line-height-0">Camila Lynch</h6>
                  <p class="medium-small blue-grey-text text-lighten-3 pt-3">Leave it</p>
                </div>
                <span class="secondary-content medium-small">2.00 PM</span>
              </li>
            </ul>
          </div>
        </div>
        <div id="settings" class="col s12">
          <p class="setting-header mt-8 mb-3 ml-5 font-weight-900">GENERAL SETTINGS</p>
          <ul class="collection border-none">
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Notifications</span>
                <div class="switch right">
                  <label>
                    <input checked type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show recent activity</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show recent activity</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show Task statistics</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Show your emails</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Email Notifications</span>
                <div class="switch right">
                  <label>
                    <input checked type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
          </ul>
          <p class="setting-header mt-7 mb-3 ml-5 font-weight-900">SYSTEM SETTINGS</p>
          <ul class="collection border-none">
            <li class="collection-item border-none">
              <div class="m-0">
                <span>System Logs</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Error Reporting</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Applications Logs</span>
                <div class="switch right">
                  <label>
                    <input checked type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Backup Servers</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
            <li class="collection-item border-none">
              <div class="m-0">
                <span>Audit Logs</span>
                <div class="switch right">
                  <label>
                    <input type="checkbox" />
                    <span class="lever"></span>
                  </label>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div id="activity" class="col s12">
          <div class="activity">
            <p class="mt-5 mb-0 ml-5 font-weight-900">SYSTEM LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">Today</div>
                <h6 class="timeline-title">Homepage mockup design</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content orange-text">Important</div>
              </li>
              <li class="timeline-items timeline-icon-cyan active">
                <div class="timeline-time">10 min</div>
                <h6 class="timeline-title">Melissa liked your activity Drinks.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content green-text">Resolved</div>
              </li>
              <li class="timeline-items timeline-icon-red active">
                <div class="timeline-time">30 mins</div>
                <h6 class="timeline-title">12 new users registered</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="{{ asset('Admin/app-assets/images/icon/pdf.png')}}" alt="document" height="30" width="25"
                    class="mr-1">Registration.doc
                </div>
              </li>
              <li class="timeline-items timeline-icon-indigo active">
                <div class="timeline-time">2 Hrs</div>
                <h6 class="timeline-title">Tina is attending your activity</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="{{ asset('Admin/app-assets/images/icon/pdf.png')}}" alt="document" height="30" width="25"
                    class="mr-1">Activity.doc
                </div>
              </li>
              <li class="timeline-items timeline-icon-orange">
                <div class="timeline-time">5 hrs</div>
                <h6 class="timeline-title">Josh is now following you</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content red-text">Pending</div>
              </li>
            </ul>
            <p class="mt-5 mb-0 ml-5 font-weight-900">APPLICATIONS LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">Just now</div>
                <h6 class="timeline-title">New order received urgent</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content orange-text">Important</div>
              </li>
              <li class="timeline-items timeline-icon-cyan active">
                <div class="timeline-time">05 min</div>
                <h6 class="timeline-title">System shutdown.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content blue-text">Urgent</div>
              </li>
              <li class="timeline-items timeline-icon-red">
                <div class="timeline-time">20 mins</div>
                <h6 class="timeline-title">Database overloaded 89%</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content">
                  <img src="{{ asset('Admin/app-assets/images/icon/pdf.png')}}" alt="document" height="30" width="25"
                    class="mr-1">Database-log.doc
                </div>
              </li>
            </ul>
            <p class="mt-5 mb-0 ml-5 font-weight-900">SERVER LOGS</p>
            <ul class="widget-timeline mb-0">
              <li class="timeline-items timeline-icon-green active">
                <div class="timeline-time">10 min</div>
                <h6 class="timeline-title">System error</h6>
                <p class="timeline-text">Melissa liked your activity.</p>
                <div class="timeline-content red-text">Error</div>
              </li>
              <li class="timeline-items timeline-icon-cyan">
                <div class="timeline-time">1 min</div>
                <h6 class="timeline-title">Production server down.</h6>
                <p class="timeline-text">Here are some news feed interactions concepts.</p>
                <div class="timeline-content blue-text">Urgent</div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide Out Chat -->
  <ul id="slide-out-chat" class="sidenav slide-out-right-sidenav-chat">
    <li class="center-align pt-2 pb-2 sidenav-close chat-head">
      <a href="#!"><i class="material-icons mr-0">chevron_left</i>Elizabeth Elliott</a>
    </li>
    <li class="chat-body">
      <ul class="collection">
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">hello!</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">How can we help? We're here for you!</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">I am looking for the best admin template.?</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Materialize admin is the responsive materializecss admin template.</p>
          </div>
        </li>

        <li class="collection-item display-grid width-100 center-align">
          <p>8:20 a.m.</p>
        </li>

        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">Ohh! very nice</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Thank you.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">How can I purchase it?</p>
          </div>
        </li>

        <li class="collection-item display-grid width-100 center-align">
          <p>9:00 a.m.</p>
        </li>

        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">From ThemeForest.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Only $24</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">Ohh! Thank you.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar pl-5 pb-0" data-target="slide-out-chat">
          <span class="avatar-status avatar-online avatar-50"><img src="{{ asset('Admin/app-assets/images/avatar/avatar-7.png')}}"
              alt="avatar" />
          </span>
          <div class="user-content speech-bubble">
            <p class="medium-small">I will purchase it for sure.</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">Great, Feel free to get in touch on</p>
          </div>
        </li>
        <li class="collection-item display-flex avatar justify-content-end pl-5 pb-0" data-target="slide-out-chat">
          <div class="user-content speech-bubble-right">
            <p class="medium-small">https://pixinvent.ticksy.com/</p>
          </div>
        </li>
      </ul>
    </li>
    <li class="center-align chat-footer">
      <form class="col s12" onsubmit="slideOutChat()" action="javascript:void(0);">
        <div class="input-field">
          <input id="icon_prefix" type="text" class="search" />
          <label for="icon_prefix">Type here..</label>
          <a onclick="slideOutChat()"><i class="material-icons prefix">send</i></a>
        </div>
      </form>
    </li>
  </ul>
</aside>

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
    
    <script type="text/javascript">
                 $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
     
            $(document).ready(function () {
                $('#teamname').on('change',function(e) {
                var team_id = e.target.value;
                
                $.ajax({
                    url: "{{ route('members')}}",
                    type: "POST",
                    data: {
                    team_id: team_id
                    },
                    success:function (data) {
                        console.log(data);
                        
                    $('#memberslist').empty();
                    
                $.each(data.members,function(index,members){
                $('#memberslist').append('<option value="'+members.team_member+'">'+members.full_name+'</option>');
                                                                  })
                                           }
                     })
                 });
                });
    </script>
  </body>


</html>
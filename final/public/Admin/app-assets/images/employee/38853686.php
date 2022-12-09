<?php

namespace App\Http\Controllers;
use Response;
use App\Models\Admin;
use App\Models\Employee;
use App\Models\Timesheet;
use App\Models\Project;
use App\Models\Task;
use App\Models\Team;
use App\Models\Training;
use App\Models\Termination;
use App\Models\ManageLeave;
use App\Models\Weekleytimesheet;
use App\Models\Monthlytraining;
use App\Models\Resignation;
use App\Models\Payslip;
use App\Models\Department;
use App\Models\Mangepayslip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use File;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.index');
    }
    
    public function adminProfile()
    {
        $admin=Auth::guard('admin')->user();
        return view('Admin.adminProfile',compact('admin'));
    }
    
     public function adminUProfile(Request $req)
    {
        $id=Auth::guard('admin')->user()->id;
        $admin=Admin::find($id);
        $admin->name=$req->name;
        $admin->phone=$req->phone;
        $admin->address=$req->address;
        $admin->city=$req->city;
        $admin->email=$req->email;
        $admin->password=bcrypt($req->password);
        // return $admin;
        $admin->update();
        
        return redirect('adminProfile')->with('success', 'Profile Updated Successfully.');
    }

    public function addnotification()
    {
        $teams= Team :: all();
        foreach ($teams as $mt) {
       
            $team_mem = json_decode($mt->team_member);

       
            $moduleid = Employee::whereIn('id', $team_mem)->select("full_name")->get();

            $team = [];

            for ($i = 0; $i < count($moduleid); $i++) {
                array_push($team, $moduleid[$i]->full_name);
            }
           
        
            $mt->full_name = $team;
        }
        return view('Admin.addnotification',compact('teams'));
    }
    
    
    public function addClient()
    {
        return view('Admin.addClient');
    }
       
    public function offer_letter()
    {
        return view('Admin.offer_letter');
    }
   
   
    
    
     public function editnotification()
    {
        return view('Admin.editnotification');
    }
    
       public function clientT()
    {
        return view('Admin.clientT');
    }
    
        public function editClient()
    {
        return view('Admin.editClient');
    }

  
  
    public function addtrainingInfo(Request $request)
    {
        $monthlytrainings= new Monthlytraining();

        if ($request->hasfile('trainingfile')) {
            $image = $request->trainingfile;
            $extension = time() . '.' . $image->getClientOriginalExtension();
            $nameimg = $image->getClientOriginalName();
            $image->move(public_path('Admin/app-assets/images/monthlytraining'), $extension);
        } 

        

        $monthlytrainings->departments=$request->departments;
        $monthlytrainings->employee= json_encode($request->employee);
        $monthlytrainings->month=$request->month;
        $monthlytrainings->trainingfile=$extension;
        $monthlytrainings->trainingfilename=$nameimg;
        $monthlytrainings->submissiondate=$request->submissiondate;
        $monthlytrainings->comments=$request->comments;

        $monthlytrainings->save();
        return redirect('addmonthlytraining');    
    }


    public function client()
    {
        return view('Admin/client');    
    }



    public function addmangepayslip(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'month' => 'required',
            'ename' => 'required',
            'totalworkingdays' => 'required',
            'designation' => 'required',
            'paiddays' => 'required',
            'department' => 'required',
            
            'bankname' => 'required',
            'joindate' => 'required',
            'bankaccountnumber' => 'required',
           
            'grosssalary' => 'required',
            'uan' => 'required',
            
           
            'basicsalary' => 'required',
            'epf' => 'required',
            'houserentallowance' => 'required',
            'healthinsurance' => 'required',
            
            
             'conveyanceallowance' => 'required',
            'professionaltax' => 'required',
            'medicalallowance' => 'required',
            'specialallowance' => 'required',
            
             'totaldeduction' => 'required',
            'netpay' => 'required',
            'amountinwords' => 'required',
            
            
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        
        $mangepayslips= new Mangepayslip();
        
        $mangepayslips->month=$request->month;
        $mangepayslips->ename=$request->ename;
        $mangepayslips->totalworkingdays=$request->totalworkingdays;
        $mangepayslips->designation=$request->designation;
        $mangepayslips->paiddays=$request->paiddays;
        $mangepayslips->department=$request->department;
        $mangepayslips->bankname=$request->bankname;
        $mangepayslips->joindate=$request->joindate;
        $mangepayslips->bankaccountnumber=$request->bankaccountnumber;
        $mangepayslips->grosssalary=$request->grosssalary;
        $mangepayslips->uan=$request->uan;
        $mangepayslips->basicsalary=$request->basicsalary;
        $mangepayslips->epf=$request->epf;
        $mangepayslips->houserentallowance=$request->houserentallowance;
        $mangepayslips->healthinsurance=$request->healthinsurance;
        $mangepayslips->conveyanceallowance=$request->conveyanceallowance;
        $mangepayslips->professionaltax=$request->professionaltax;
        $mangepayslips->medicalallowance=$request->medicalallowance;
        $mangepayslips->specialallowance=$request->specialallowance;
        $mangepayslips->totaldeduction=$request->totaldeduction;
        $mangepayslips->netpay=$request->netpay;
        $mangepayslips->amountinwords=$request->amountinwords;
       
       $mangepayslips->save();
       
        return redirect('payroll1');    
    }
    
     public function editpayrollslip(Request $request,$id){

        $validator = Validator::make($request->all(), [

            'designation' => 'required',
           
            
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        

        $mangepayslips= Mangepayslip::find($id);
        
        $mangepayslips->month=$request->month;
        
        $mangepayslips->totalworkingdays=$request->totalworkingdays;
        $mangepayslips->designation=$request->designation;
        $mangepayslips->paiddays=$request->paiddays;
        $mangepayslips->department=$request->department;
        $mangepayslips->bankname=$request->bankname;
        $mangepayslips->joindate=$request->joindate;
        $mangepayslips->bankaccountnumber=$request->bankaccountnumber;
        $mangepayslips->grosssalary=$request->grosssalary;
        $mangepayslips->uan=$request->uan;
        $mangepayslips->basicsalary=$request->basicsalary;
        $mangepayslips->epf=$request->epf;
        $mangepayslips->houserentallowance=$request->houserentallowance;
        $mangepayslips->healthinsurance=$request->healthinsurance;
        $mangepayslips->conveyanceallowance=$request->conveyanceallowance;
        $mangepayslips->professionaltax=$request->professionaltax;
        $mangepayslips->medicalallowance=$request->medicalallowance;
        $mangepayslips->specialallowance=$request->specialallowance;
        $mangepayslips->totaldeduction=$request->totaldeduction;
        $mangepayslips->netpay=$request->netpay;
        $mangepayslips->amountinwords=$request->amountinwords;
       
       $mangepayslips->update();
       
        return redirect('payroll1');  
           
    }

    public function perfomance(){

        return view('Admin/perfomance');    
    }
    public function recrupment(){

        return view('Admin/recrupment');    
    }
    
    public function Notification(){
        
        return view('Admin/Notification');    
    }
    public function payrollIndex(){

        return view('Admin/payrollIndex');    
    }
    public function seperationadmin(){

        return view('Admin/seperationadmin');    
    }
    
    public function learninganddev(){


        $trainings= Training :: all();
        foreach ($trainings as $mt) {
       
            $team_mem = json_decode($mt->members);

       
            $moduleid = Employee::whereIn('id', $team_mem)->select("full_name")->get();

            $team = [];

            for ($i = 0; $i < count($moduleid); $i++) {
                array_push($team, $moduleid[$i]->full_name);
            }
           
        
            $mt->full_name = $team;
        }
        return view('Admin/learninganddev',compact('trainings'));    
    }

    public function addTraning1(Request $request){

 $validator = Validator::make($request->all(), [
            'department' => 'required',
            'members' => 'required',
            'traningtype' => 'required',
            'trainername' => 'required',
            'timeduration' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'discription' => 'required',
            'cost' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $trainings= new Training();

        $trainings->department=$request->department;
        $trainings->members = json_encode($request->members);
        $trainings->traningtype=$request->traningtype;
        $trainings->trainername=$request->trainername;
        $trainings->startDate=$request->startDate;
         $trainings->timeduration=$request->timeduration;
        $trainings->endDate=$request->endDate;
        $trainings->discription=$request->discription;
        $trainings->cost=$request->cost;
        
        $trainings->save();

        return redirect('learninganddev');    
    }
   
   
    public function addEmployee()
    {
        return view('Admin/addEmployee');
    }

    public function addEmp(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'aadhar_card' => 'required',
            'full_name' => 'required',
            'education' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'email' => 'required',
            
            'maritial_status' => 'required',
            'mobile_no' => 'required',
            'birth_date' => 'required',
           
            'joining_date' => 'required',
            'employee_id' => 'required',
            
           
            'gender' => 'required',
            'pan_card' => 'required',
            'bank_passbook_cheque' => 'required',
            'mark_list' => 'required',
            
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        if ($request->hasfile('aadhar_card')) {
            $no = rand(00000000, 99999999);
            $image1 = $request->aadhar_card;
            $aadharcard = $image1->getClientOriginalName();
            $extension1 = $no . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('Admin/app-assets/images/employee'), $extension1);
        }

        if ($request->hasfile('pan_card')) {
            $no = rand(00000000, 99999999);
            $image2 = $request->pan_card;
            $extension2 = $no . '.' . $image2->getClientOriginalExtension();
            $pan_card = $image2->getClientOriginalName();
            $image2->move(public_path('Admin/app-assets/images/employee'), $extension2);
        }

        if ($request->hasfile('bank_passbook_cheque')) {
            $no = rand(00000000, 99999999);
            $image3 = $request->bank_passbook_cheque;
            $extension3 = $no . '.' . $image3->getClientOriginalExtension();
            $bank_passbook_cheque = $image3->getClientOriginalName();
            $image3->move(public_path('Admin/app-assets/images/employee'), $extension3);
        }

        if ($request->hasfile('mark_list')) {
            $no = rand(00000000, 99999999);
            $image4 = $request->mark_list;
            $extension4 = $no . '.' . $image4->getClientOriginalExtension();
            $mark_list = $image4->getClientOriginalName();
            $image4->move(public_path('Admin/app-assets/images/employee'), $extension4);
        }


        $employees = new Employee();

        $employees->full_name = $request->full_name;
        $employees->education = $request->education;
        $employees->address = $request->address;
        $employees->designation = $request->designation;
        $employees->email = $request->email;
       
        $employees->maritial_status = $request->maritial_status;
        $employees->mobile_no = $request->mobile_no;
        $employees->birth_date = $request->birth_date;
        $employees->blood_group = $request->blood_group;
        $employees->joining_date = $request->joining_date;
        $employees->employee_id = $request->employee_id;
        $employees->relieving_date = $request->relieving_date;
        $employees->emergency_contact_no = $request->emergency_contact_no;
        $employees->gender = $request->gender;
        $employees->aadhar_card = $aadharcard;
        $employees->aadharcard_file = $extension1;
        $employees->pan_card = $pan_card;
        $employees->pan_card_file = $extension2;
        $employees->bank_passbook_cheque = $bank_passbook_cheque;
        $employees->bank_passbook_cheque_file = $extension3;
        $employees->mark_list = $mark_list;
        $employees->mark_list_file = $extension4;
        $employees->totalleaves = $request->totalleaves;
        $employees->paidleaves = $request->paidleaves;
        $employees->unpaidleaves = $request->unpaidleaves;
        
        
        $employees->save();

        return redirect('employeeList')->with('success', 'Employee Added Successfully.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $timesheets = Timesheet::find($id);
        return view('Admin/EditEmpTimesheet', compact('timesheets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timesheet $timesheets, $id)
    {
        $validator = Validator::make($request->all(), [
            'date' => 'required',
            'developer_name' => 'required|max:255',
            'productivity_hours' => 'required',
            'review_hours' => 'required|max:255',
            'others' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $timesheets = Timesheet::find($id);

        $timesheets->date = $request->date;
        $timesheets->developer_name = $request->developer_name;
        $timesheets->productivity_hours = $request->productivity_hours;
        $timesheets->review_hours = $request->review_hours;
        $timesheets->others = $request->others;

        $timesheets->update();
        return redirect('employee')->with('success', 'Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }



    public function login()
    {
        return view('Admin/admin-login');
    }


    public function verify(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'email' => 'required|max:255',
            'password' => ['required'],
        ]);


        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
            return view('Admin.index')
                ->with('success', 'Login successfully');
        } else {

            return Redirect('login')->with('success', 'Wrong Email Or Password');
        }
    }



    public function logOut()
    {
        Auth::guard('admin')->logout();
        return redirect('login');
    }

    public function employeeTimeSheet()
    {
         $timesheets = Timesheet::leftjoin('projects', 'timesheets.proj_name', '=', 'projects.id')
                     ->select('timesheets.*', 'projects.name')
                     ->get();
        
        return view('Admin.employee', compact('timesheets'));
    }

    public function manageLeave()
    {

        $manageleaves = ManageLeave::all();

        return view('Admin/ManageLeave', compact('manageleaves'));
    }

    public function projectcreation()
    {
        $projects = Project::leftjoin('teams', 'projects.team', '=', 'teams.id')
                             ->select('projects.*', 'teams.team_name')
                             ->get();
        // return $projects;
        return view('Admin.project-creation', compact('projects'));
    }

    public function employeeList()
    {
        $employees = Employee::all();
        return view('Admin/EmployeeList', compact('employees'))->with('success', 'Employee Added Successfully');
    }

    public function editemptimesheet()
    {

        return view('Admin/EditEmpTimesheet');
    }

    public function deletetimesheet($id)
    {
        $timesheets = Timesheet::find($id);
        $timesheets->delete();
        return redirect('employee')->with('success', 'Deleted Successfully');
    }


    public function DeleteTeam($id)
        {
            $teams = Team::find($id);
            $teams->delete();
            return redirect('create-team')->with('success', 'Deleted Successfully');
        }

    public function addproject()
    {

        return view('Admin/addProject');
    }

    public function taskCreation($id)
    {

        $tasks = Task::leftjoin('projects', 'tasks.project_name', '=', 'projects.id')
                        ->leftjoin('teams', 'tasks.team_name', '=', 'teams.id')                
                       ->select('tasks.*', 'projects.name',  'teams.team_name')
                       ->where('tasks.project_name', '=', $id)
                       ->get();
        
       
        
        foreach ($tasks as $mt) {
        //     $categoryIds = json_decode($mt->project_name);
            $team_mem = json_decode($mt->team_member);

        //     $categories = Project::whereIn('id', $categoryIds)->select("name")->get();
           
            $moduleid = Employee::whereIn('id', $team_mem)->select("full_name")->get();

        //     $cat_name = [];
            $team = [];

        //     for ($i = 0; $i < count($categories); $i++) {
        //         array_push($cat_name, $categories[$i]->name);
        //     }
            for ($i = 0; $i < count($moduleid); $i++) {
                array_push($team, $moduleid[$i]->full_name);
            }
           

        //     $mt->name = $cat_name;
            $mt->full_name = $team;
        }
        // return $tasks;
        return view('Admin.taskCreation', compact('tasks'));
    }


    public function  deleteproject($id)
    {
        $projects = project::find($id);
        $projects->delete();
        return redirect('project-creation')->with('success', 'Project Deleted Successfully');
    }

    public function  deletepayslip($id)
    {
        $payslips =  Payslip::find($id);
        $payslips->delete();
        return redirect('manageSalaryM')->with('success', 'Project Deleted Successfully');
    }


    public function editProject($id)
    {
       
        $projects = project::find($id);
        return view('Admin/editProject', compact('projects'));
    }


    public function addProjects(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
          
            'team' => 'required',
            'requirement' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->hasfile('requirement')) {
            $image = $request->requirement;
            $extension = time() . '.' . $image->getClientOriginalExtension();
            $nameimg = $image->getClientOriginalName();
            $image->move(public_path('Admin/app-assets/images/project'), $extension);
        } else {
            unset($input['image']);
        }


        $projects = new Project();

        $projects->name = $request->name;
        $projects->start_date = $request->start_date;
        $projects->end_date = $request->end_date;
        $projects->totalhrs = $request->totalhrs;
        $projects->team = $request->team;
        $projects->requirement = $extension;
        $projects->requirement_name = $nameimg;

        $projects->save();

        return redirect('project-creation')->with('success', 'Project Added Successfully');
    }



    public function updateproject(Request $request, Project $projects, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'start_date' => 'required',
            'end_date' => 'required',
            'totalhrs' => 'required|max:255',
            'team' => 'required',

        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $projects = Project::find($id);
        
        if ($request->hasfile('requirement')) {
            $image = $request->requirement;
            $extension = time() . '.' . $image->getClientOriginalExtension();
            $nameimg = $image->getClientOriginalName();
            $image->move(public_path('Admin/app-assets/images/project'), $extension);
        } else {
        }



        $projects->name = $request->name;
        $projects->start_date = $request->start_date;
        $projects->end_date = $request->end_date;
        $projects->totalhrs = $request->totalhrs;
        $projects->team = $request->team;
        $projects->requirement = $extension;
        $projects->requirement_name = $nameimg;



        $projects->update();
        return redirect('project-creation')->with('success', 'Project Edited Successfully');
    }



    public function addTask(Request $request,$id)
    {
        $proj = DB::table('projects')->leftjoin('teams', 'projects.team', '=', 'teams.id')
                             ->select('projects.*', 'teams.team_name as tname', 'teams.team_member')
                             ->where('projects.id', '=', request('id'))
                             ->get();
                             
        foreach ($proj as $mt) {
       
            $team_mem = json_decode($mt->team_member);

       
            $moduleid = Employee::whereIn('id', $team_mem)->select("full_name","id")->get();

            $team = [];
            $tid=[];
            for ($i = 0; $i < count($moduleid); $i++) {
                array_push($team, $moduleid[$i]->full_name);
                array_push($tid, $moduleid[$i]->id);
            }
           
            $mt->mem_id = $tid;
            $mt->full_name = $team;
        }
        // return $team;
        // ,compact('proj')
        return view('Admin.addTask',compact('proj'));
    }

    public function weekleytimesheet1()
    {
        $weekleytimesheet= Weekleytimesheet::all();
        return view('Admin/weekleytimesheet1',compact('weekleytimesheet'));
    }

    public function  deletetask($id)
    {
       
        $tasks = Task::find($id);
       
        $tasks->delete();
        return back()->with('sucess', 'Deleted Successfully');
    }


    public function editTask($id)
    { 
        $tasks = Task::find($id);
        //  $tasks = Task::leftjoin('projects', 'tasks.project_name', '=', 'projects.id')
        //               ->select('tasks.*','projects.name')
        //               ->where('tasks.id', '=', $id)
        //               ->get();
        
     
    
        return view('Admin/editTask', compact('tasks'));
    }

    public function Update_Task(Request $request,$id)
    {
        $tasks = Task::find($id);
        
       
        $tasks->module = json_encode($request->module);
        $tasks->activity = json_encode($request->activity);
        $tasks->task_hours = json_encode($request->task_hours);
        $tasks->developer_hours = $request->developer_hours;
        $tasks->submission_date = $request->submission_date;
        $tasks->team_name = json_encode($request->team_name);
        
    

        $tasks->update();
        
        return Redirect('project-creation')->with('success', 'Updated Added Successfully');
    }


    public function saveTask(Request $request)
    {
       
       
        $validator = Validator::make($request->all(), [
           
            'assign_date' => 'required',
            
            'developer_hours' => 'required',
            'submission_date' => 'required',
           
            
           
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $projects = DB::table('projects')->leftjoin('teams', 'projects.team', '=', 'teams.id')
        ->select('projects.*', 'teams.team_name')
        ->where('projects.id', '=', request('id'))
        ->get();

        $admin = new Task();
        $total_hrs = "pending";
        $developer_status = "pending";
        $tester_status = "pending";
        $qa_status = "pending";
        
        $admin->project_name = $request->project_name;
        $admin->assign_date = $request->assign_date;
        $admin->module = json_encode($request->module);
        $admin->activity = json_encode($request->activity);
        $admin->task_hours =json_encode($request->task_hours);
        $admin->developer_hours = $request->developer_hours;
        $admin->submission_date = $request->submission_date;
        $admin->team_name =$request->team_name;
        $admin->team_member = json_encode($request->team_member);
        $admin->developer_status = $developer_status;
        $admin->tester_status = $tester_status;
        $admin->qa_status = $qa_status;
        $admin->total_hrs = $total_hrs;
        $admin->save();

       
        return Redirect('project-creation')->with('success', 'Task Added Successfully');
    }
    public function uploadweekelytimesheet(Request $request)
    {
                $validator = Validator::make($request->all(), [
           
            'month' => 'required',
            
            'startdate' => 'required',
            'enddate' => 'required',
             'uploadfile' => 'required',
            
           
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if ($request->hasfile('uploadfile')) {
            $image = $request->uploadfile;
            $extension = time() . '.' . $image->getClientOriginalExtension();
            $nameimg = $image->getClientOriginalName();
            $image->move(public_path('Admin/app-assets/images/timesheet'), $extension);
        } else {
        }

        $weekleytimesheets= new Weekleytimesheet();
        $weekleytimesheets->month = $request->month;
        $weekleytimesheets->startdate = $request->startdate;
        $weekleytimesheets->enddate = $request->enddate;
        $weekleytimesheets->uploadfile = $extension;
        $weekleytimesheets->uploadfilename= $nameimg;

        $weekleytimesheets->save();

        return redirect('weekleytimesheet1');
    }

    public function uploadtermination(Request $request)
    {

        if ($request->hasfile('tfile')) {
            $image = $request->tfile;
            $extension = time() . '.' . $image->getClientOriginalExtension();
            $nameimg = $image->getClientOriginalName();
            $image->move(public_path('Admin/app-assets/images/terminations'), $extension);
        } else {
        }

        $terminations= new Termination();
        $terminations->empid = $request->empid;
        $terminations->ename = $request->ename;
        $terminations->deapartment = $request->deapartment;
        $terminations->ldate =$request->ldate;
        $terminations->comment= $request->comment;
        $terminations->tfile= $extension;
        $terminations->tfilename= $nameimg;

        $terminations->save();

        return redirect('seperationadmin');
    }
    
    public function payslip(Request $request)
    {

    $validator = Validator::make($request->all(), [
           
            'departmentsp' => 'required',
            
            'employeep' => 'required',
            'monthp' => 'required',
             'payslipfile' => 'required',
            
           
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }


        if ($request->hasfile('payslipfile')) {
            $image = $request->payslipfile;
            $extension = time() . '.' . $image->getClientOriginalExtension();
            $nameimg = $image->getClientOriginalName();
            $image->move(public_path('Admin/app-assets/images/payslip'), $extension);
        } else {
        }

        $payslips= new Payslip();
        $payslips->departmentsp = $request->departmentsp;
        $payslips->employeep = $request->employeep;
        $payslips->monthp = $request->monthp;
        $payslips->payslipfile= $extension;
        $payslips->payslipfilename= $nameimg;

        $payslips->save();

        return redirect('manageSalaryM');
    }
    

    public function viewfile()
    {
      
        return view('Admin/viewfile');
    
    }
    public function download_timesheet($id)
    {
        
        return Response()->download(public_path('/Admin/app-assets/images/timesheet/' . $id));
    }

    public function download_payslip($id)
    {
        
        return Response()->download(public_path('/Admin/app-assets/images/payslip/' . $id));
    }


    public function viewtrainingfile($id)
    {
        $monthlytrainings= Monthlytraining::find($id);
            return Response()->make(file_get_contents(public_path('/Admin/app-assets/images/monthlytraining/' . $monthlytrainings->trainingfile)), 200, [
            'content-type'=>'application/pdf',
        ]);
    }

    public function weekleytimesheet()
    {
      
        return view('Admin/weekleytimesheet');
    }

    public function addTotalPerfomance()
    {
        // $proj = DB::table('projects')->leftjoin('teams', 'projects.team', '=', 'teams.id')
        //                      ->select('projects.*', 'teams.team_name as tname', 'teams.team_member')
        //                      ->where('projects.id', '=', request('id'))
        //                      ->get();
                             
        // foreach ($proj as $mt) {
       
        //     $team_mem = json_decode($mt->team_member);

       
        //     $moduleid = Employee::whereIn('id', $team_mem)->select("full_name","id")->get();

        //     $team = [];
        //     $tid=[];
        //     for ($i = 0; $i < count($moduleid); $i++) {
        //         array_push($team, $moduleid[$i]->full_name);
        //         array_push($tid, $moduleid[$i]->id);
        //     }
           
        //     $mt->mem_id = $tid;
        //     $mt->full_name = $team;
        // }
        return view('Admin/addTotalPerfomance');
    }


    public function addperfomance()
    {
        return view('Admin/addperfomance');
    }

    public function admineditperfomance()
    {
        return view('Admin/admineditperfomance');
    }

    public function addmonthlytraining()
    {
        $monthlytrainings = Monthlytraining::all();
         foreach ($monthlytrainings as $mt) {
            $team_mem = json_decode($mt->employee);
           
            $moduleid = Employee::whereIn('id', $team_mem)->select("full_name")->get();

            $team = [];

            for ($i = 0; $i < count($moduleid); $i++) {
                array_push($team, $moduleid[$i]->full_name);
            }
           
            $mt->full_name = $team;
        }
        // return $monthlytrainings;
        return view('Admin/addmonthlytraining',compact('monthlytrainings'));
    }
    
   public function uploadMarks(Request $request)
   {
        $validator = Validator::make($request->all(), [

            'marks' => 'required',
            'comments1' => 'required',
            
            
            
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
       
    //   return($request->user_id);
    //   $monthlytrainings= Monthlytraining::all();
    //   if($request->user_id=='monthlytrainings.id'){
    //   $div=$request->user_id;
       $monthlytrainings= Monthlytraining::find($request->user_id);
       
         $monthlytrainings->marks=$request->marks;
        $monthlytrainings->comments1=$request->comments1;
        
        $monthlytrainings->update();
        
        return redirect('addmonthlytraining');
       
   }

    public function resignation()
    {
        $resignations=Resignation::all();
        return view('Admin/resignation',compact('resignations'));
    }

    public function seperation()
    {
        return view('Admin/seperation');
    }
    public function approveReg(Request $request,$id)
    {
        
        $resignations= Resignation::find($id);

        $resignations->status=$request->status;
        $resignations->comments=$request->comments;

        $resignations->save();

        return redirect('resignation');
    }
    
    
    
   
    public function aproveresignation($id)
    {
        $resignations=Resignation::find($id);
        
        
        return view('Admin/aproveresignation',compact('resignations'));
    }
    public function addmonthlyTraningInfo()
    {
        return view('Admin/addmonthlyTraningInfo');
    }


    
    public function salaryslip($id)
    {
        $mangepayslips = Mangepayslip::leftjoin('employees', 'mangepayslips.ename', '=', 'employees.id')            
       ->select('mangepayslips.*', 'employees.full_name','employees.employee_id')
       ->where('mangepayslips.id' ,'=' ,$id )
       ->get();
        
        return view('Admin/salaryslip',compact('mangepayslips'));
    }
    public function viewPayroll($id)
    {
        $mangepayslips = Mangepayslip::leftjoin('employees', 'mangepayslips.ename', '=', 'employees.id')            
       ->select('mangepayslips.*', 'employees.full_name','employees.employee_id')
       ->where('mangepayslips.id' ,'=' ,$id )
       ->get();
       
        return view('Admin.viewPayroll',compact('mangepayslips'));
    }

    public function payroll()
    {
        return view('Admin/payroll');
    }
   
    public function addpayslip()
    {
        return view('Admin/addpayslip');
    }

    public function editPpayslip($id)
    {
        $payslips= Payslip::find($id);
        return view('Admin/editpayslip',compact('payslips'));
    }

    

    public function editpaySlip($id,Request $request)
    {
        if ($request->hasfile('payslipfile')) {
            $image = $request->payslipfile;
            $extension = time() . '.' . $image->getClientOriginalExtension();
            $nameimg = $image->getClientOriginalName();
            $image->move(public_path('Admin/app-assets/images/payslip'), $extension);
        } else {
        }

        $payslips= Payslip::find($id);
        $payslips->departmentsp = $request->departmentsp;
        $payslips->employeep = $request->employeep;
        $payslips->monthp = $request->monthp;
        $payslips->payslipfile= $extension;
        $payslips->payslipfilename= $nameimg;

        $payslips->update();

         return redirect('manageSalaryM');
    }
   
    public function payroll1()
    {
        $mangepayslips = Mangepayslip::leftjoin('employees', 'mangepayslips.ename', '=', 'employees.id')            
       ->select('mangepayslips.*', 'employees.full_name')
       ->get();
       
        return view('Admin/payroll1',compact('mangepayslips'));
    }
    
    public function manageSalaryM()
    {
        $payslips = Payslip::leftjoin('employees', 'payslips.employeep', '=', 'employees.id')            
       ->select('payslips.*', 'employees.full_name')
       ->get();
        
        return view('Admin/manageSalaryM',compact('payslips'));
    }
    public function addTraning()
    {
        return view('Admin/addTraning');
    }
    public function Department()
    {
        $dep =Department::all();
        
        return view('Admin/department',compact('dep'));
    }
    
    public function addDepartment(Request $request)
    {
        
        $dep = new Department();
        $dep->dname=$request->dname;
        $dep->save();

        return redirect('Department')->with('succes', 'Department Added Successfully.');
    }
    
    public function Edit_Department(Request $req)
    {
        $dep =Department::find($req->did);
        $dep->dname=$req->dname;
        $dep->update();
        
       return redirect('Department')->with('succes', 'Department Updated Successfully.');
    }
    
     public function  DeleteDepartment($id)
    {
        $employees = Department::find($id);
        $employees->delete();
        return redirect('Department')->with('success', 'Department Deleted Successfully');;
    }

    public function  deleteEmployeeList($id)
    {
        $employees = Employee::find($id);
        $employees->delete();
        return redirect('employeeList')->with('success', 'Deleted Employee Successfully');;
    }


    public function deleteLeaves($id)
    {

        $manageleaves = ManageLeave::find($id);
        $manageleaves->delete();
        return redirect('manageLeave')->with('success', 'Deleted Leaves Successfully');
    }



    public function editEmployee($id)
    {
        $employees = Employee::find($id);
        
        return view('Admin/editEmployee', compact('employees'));
    }

    public function editLeave($id)
    {
        $manageleaves = ManageLeave::find($id);
        return view('Admin/editLeave', compact('manageleaves'));
    }


    public function editLeaveStatus(Request $request, $id)
    {
      
        $manageleaves = ManageLeave::find($id);
        
        $manageleaves->leave_status = $request->leave_status;
        $manageleaves->comments = $request->comments;
        
        $manageleaves->update();
        
        return redirect('manageLeave')->with('success', 'LeaveStatus Successfully');
    }

    public function updateEmployee(Request $request, $id)
    {
        
        $validator = Validator::make($request->all(), [

            'aadhar_card' => 'required',
            'full_name' => 'required',
            'education' => 'required',
            'address' => 'required',
            'designation' => 'required',
            'email' => 'required',
            'password' => 'required',
            'maritial_status' => 'required',
            'mobile_no' => 'required',
            'birth_date' => 'required',
            'blood_group' => 'required',
            'joining_date' => 'required',
            'employee_id' => 'required',
            'relieving_date' => 'required',
            'emergency_contact_no' => 'required',
            'gender' => 'required',
            'pan_card' => 'required',
            'bank_passbook_cheque' => 'required',
            'mark_list' => 'required',
            
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }


        if ($request->hasfile('aadhar_card')) {
            $no = rand(00000000, 99999999);
            $image1 = $request->aadhar_card;
            $aadharcard = $image1->getClientOriginalName();
            $extension1 = $no . '.' . $image1->getClientOriginalExtension();
            $image1->move(public_path('Admin/app-assets/images/employee'), $extension1);
        } else {
            $aadharcard = $request->aadhar_card;
            $extension1 = $request->aadharcard_file;
        }

        if ($request->hasfile('pan_card')) {
            $no = rand(00000000, 99999999);
            $image2 = $request->pan_card;
            $extension2 = $no . '.' . $image2->getClientOriginalExtension();
            $pan_card = $image2->getClientOriginalName();
            $image2->move(public_path('Admin/app-assets/images/employee'), $extension2);
        } else {
            $pan_card = $request->pan_card;
            $extension2 = $request->pan_card_file;
        }

        if ($request->hasfile('bank_passbook_cheque')) {
            $no = rand(00000000, 99999999);
            $image3 = $request->bank_passbook_cheque;
            $extension3 = $no . '.' . $image3->getClientOriginalExtension();
            $bank_passbook_cheque = $image3->getClientOriginalName();
            $image3->move(public_path('Admin/app-assets/images/employee'), $extension3);
        } else {
            $bank_passbook_cheque = $request->bank_passbook_cheque;
            $extension3 = $request->bank_passbook_cheque_file;
        }

        if ($request->hasfile('mark_list')) {
            $no = rand(00000000, 99999999);
            $image4 = $request->mark_list;
            $extension4 = $no . '.' . $image4->getClientOriginalExtension();
            $mark_list = $image4->getClientOriginalName();
            $image4->move(public_path('Admin/app-assets/images/employee'), $extension4);
        } else {
            $mark_list = $request->mark_list;
            $extension4 = $request->mark_list_file;
        }


        $employees =  Employee::find($id);

        $employees->full_name = $request->full_name;
        
        $employees->education = $request->education;
        $employees->address = $request->address;
        $employees->designation = $request->designation;
        $employees->email = $request->email;
        $employees->maritial_status = $request->maritial_status;
        $employees->mobile_no = $request->mobile_no;
        $employees->birth_date = $request->birth_date;
        $employees->blood_group = $request->blood_group;
        $employees->joining_date = $request->joining_date;
        $employees->employee_id = $request->employee_id;
        $employees->relieving_date = $request->relieving_date;
        $employees->emergency_contact_no = $request->emergency_contact_no;
        $employees->gender = $request->gender;
        $employees->aadhar_card = $aadharcard;
        $employees->aadharcard_file = $extension1;
        $employees->pan_card = $pan_card;
        $employees->pan_card_file = $extension2;
        $employees->bank_passbook_cheque = $bank_passbook_cheque;
        $employees->bank_passbook_cheque_file = $extension3;
        $employees->mark_list = $mark_list;
        $employees->mark_list_file = $extension4;
        $employees->totalleaves = $request->totalleaves;
        $employees->paidleaves = $request->paidleaves;
        $employees->unpaidleaves = $request->unpaidleaves;
        $employees->update();

        return redirect('employeeList')->with('succes', 'Employee Added Successfully.');
    }
    
    public function dowload_Requirement($id)
    {
        
         return Response()->download(public_path('/Admin/app-assets/images/employee/' . $id));
    }
    
    public function createTeam()
    {
        $teams = Team::all();
        
        foreach ($teams as $mt) {
       
            $team_mem = json_decode($mt->team_member);

       
            $moduleid = Employee::whereIn('id', $team_mem)->select("full_name")->get();

            $team = [];

            for ($i = 0; $i < count($moduleid); $i++) {
                array_push($team, $moduleid[$i]->full_name);
            }
           
        
            $mt->full_name = $team;
        }
       
        return view('Admin.TeamPage', compact('teams'));
    }
    
    public function show_add_Team()
    {
        $dep = Department::all();
        return view('Admin.createTeam',compact('dep'));
    }
    
    public function AddTeam()
    {
        return view('Admin.AddTeam');
    }
    
    public function add_Team(Request $request)
    {
       
        $validator = Validator::make($request->all(), [

            'team_name' => 'required',
            'team_member' => 'required',
            'designation' => 'required',
            'team_leader' => 'required',
            
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

       
        $team =  new Team();
        $team->team_name = $request->team_name;
        $team->team_member = json_encode($request->team_member);
        $team->team_leader = $request->team_leader;
        $team->designation = $request->designation;
        
        $team->save();
       
        return redirect('create-team')->with('success', 'Team Created Successfully.');
    }
    
    public function Show_Edit_Team(Request $Request, $id)
    {
        
        $members = Team::find($id);
                              
        //      foreach ($members as $mt) {
        // //     $categoryIds = json_decode($mt->project_name);
        //     $team_mem = json_decode($mt->team_member);

        // //     $categories = Project::whereIn('id', $categoryIds)->select("name")->get();
           
        //     $moduleid = Employee::whereIn('id', $team_mem)->select("full_name")->get();

        // //     $cat_name = [];
        //     $team = [];

        // //     for ($i = 0; $i < count($categories); $i++) {
        // //         array_push($cat_name, $categories[$i]->name);
        // //     }
        //     for ($i = 0; $i < count($moduleid); $i++) {
        //         array_push($team, $moduleid[$i]->full_name);
        //     }
           

        // //     $mt->name = $cat_name;
        //     $mt->full_name = $team;
        // }
                              
        return view('Admin.editTeam', compact('members'));
       
        
    }
    
    public function Edit_Team(Request $request, $id)
    { 
        $validator = Validator::make($request->all(), [

            'team_name' => 'required',
            'team_member' => 'required',
            'team_leader' => 'required',
            'designation' => 'required',
            
        ]);


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

       
        $team =   Team::find($id);
        $team->team_name = $Request->team_name;
        $team->team_leader = $Request->team_leader;
        $team->team_member = json_encode($Request->team_member);
        $team->designation = $Request->designation;
        
        $team->update();
       
        return redirect('create-team')->with('success', 'Team Updated Successfully.');
    }
    public function json_Members(Request $Request)
    {
        
        $members = Team::where('id',$Request->teamId)
                              ->first();
            
        $team_mem = json_decode($members->team_member);

        $moduleid = Employee::whereIn('id', $team_mem)->select("full_name","id")->get();

        $team = [];

        for ($i = 0; $i < count($moduleid); $i++) {
            array_push($team, ['id' => $moduleid[$i]->id, 'full_name' => $moduleid[$i]->full_name]);
        }
                            
        return response()->json([
            'members' => $team]);
       
        
    }
    
}

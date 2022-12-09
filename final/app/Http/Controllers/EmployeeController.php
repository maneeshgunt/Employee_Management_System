<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Timesheet;
use App\Models\ManageLeave;
use App\Models\Project;
use App\Models\Task;
use App\Models\Training;
use App\Models\Weekleytimesheet;
use App\Models\Monthlytraining;
use App\Models\Mangepayslip;

use App\Models\Payslip;
use App\Models\Resignation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class EmployeeController extends Controller
{


    public function loginE()
    {
        return view('Employee/user-login');
    }

    public function verifyE(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required',
            'password' => 'required',
        ]);


        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::guard('employee')->attempt($request->only('email', 'password'))) {

            return view('Employee/indexE')
                ->with('success', 'Login successfully');
        } else {
            return Redirect('/')->with('unsuccess', 'Invalid Email Or Password');
        }
        
        
    }

    public function indexE()
    {
        return view('Employee/indexE');
    }



 public function profileEmp()
    {
        $user = Auth::guard('employee')->user();
        
        return view('Employee/profileEmp',compact('user'));
    }
    
     public function profileUpdate(Request $request)
    {
        
        $user = Auth::guard('employee')->user()->id;
        $employee =  Employee::find($user);
        $employee->full_name = $request->fname;
        $employee->email = $request->email;
        $employee->blood_group = $request->Bloodgrp;
        $employee->address = $request->address;
        $employee->mobile_no = $request->mobile;
        $employee->emergency_contact_no = $request->EcontactNo;
        $employee->password = bcrypt($request->confirm_password);
        $employee->education = $request->education;
        $employee->designation = $request->designation;
        $employee->birth_date = $request->Bdate;
        $employee->joining_date = $request->Jdate;
        $employee->relieving_date = $request->Rdate;
        $employee->gender = $request->gender;
        $employee->update();

        return redirect('profileEmp')->with('success','Profile Update Successfully');
       
    }
    
    
    public function EmpDailyTimeSheet()
    {
        $user = Auth::guard('employee')->user()->full_name;
    
        
         $timesheets = Timesheet::leftjoin('projects', 'timesheets.proj_name', '=', 'projects.id')
                     ->select('timesheets.*', 'projects.name')->where('developer_name', '=', $user)
                     ->get();
        
        // return $timesheets;
        return view('Employee.EmpDailyTimeSheet', compact('timesheets'));
    }

    public function ApplyLeave()
    {
        $user = Auth::guard('employee')->user()->full_name;
        
        $manageleaves = ManageLeave::select('manage_leaves.*')->where('name', '=', $user)->get();
        
        return view('Employee/ApplyLeave', compact('manageleaves'));
    }

    public function EmpTask(){
        
        //  $tasks = DB::table('tasks')->leftjoin('projects', 'tasks.project_name', '=', 'projects.id')
        //                             ->select('tasks.*','projects.name')
        //                             ->get();
        
        // return view('Employee.EmpTask',compact('tasks'));
        
        
         $user = Auth::guard('employee')->user()->id;
                
                $tasks = Task::leftjoin('projects', 'tasks.project_name', '=', 'projects.id')
                     ->select('tasks.*', 'projects.requirement','projects.requirement_name', 'projects.name')
                     ->whereJsonContains('team_member',"$user")
                     ->get();
                     
                  return view('Employee.EmpTask', compact('tasks'));   
                  
    // {  $t=Auth::guard('employee')->user()->id;
    
    //     $ta=Task::find($t);
   
        // $user = Auth::guard('employee')->user()->id;
    //   $tasks=Task::findMany(["$user"]);
    //   return $tasks;die;
       
        // $tasks = Task::leftjoin('projects', 'tasks.project_name', '=', 'projects.id')
        //              ->select('tasks.*', 'projects.requirement','projects.requirement_name', 'projects.name')
        //              ->where([])
        //              ->get();
                     
                    
        //               $n=$tasks[0]->team_member;
                      
        //               $tasks->where(function($tasks, $n){
        //                   foreach ($n as $id){
        //                      $tasks->orWhere('user', 'like', '%'.$id.'%');
        //                   } 
        //                 });

                //     $n1=$tasks->get();
                //  return $n1;die;
                
                   
                      
                //      foreach($user as $m){
                //          $team_mem = json_decode($mt->team_member);
                         
                //          for ($i = 0; $i < count($team_mem); $i++) {
                //                 array_push($teammem, $team_mem[$i]->team_member);
                //             }
                //              $mt->team_member = $teammem;
                //      }
    
        
    }

    public function addTimesheet()
    {
        return view('Employee/addTimesheet');
    }

    public function aAddTimesheet(Request $request)
    {
          $validator = Validator::make($request->all(), [

            'date' => 'required',
            'proj_name' => 'required',
             'department' => 'required',
            'hr1' => 'required',
             'hr2' => 'required',
            'hr3' => 'required', 
            'hr4' => 'required',
            'hr5' => 'required', 
            'hr6' => 'required',
            'hr7' => 'required',
            'hr8' => 'required',
            'hr9' => 'required',
            'hr10' => 'required',
            'intime' => 'required',
            'outtime' => 'required',
        
           
        ]);


        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $timesheets = new Timesheet();
        $name = Auth::guard('employee')->user()->full_name;
        $empid = Auth::guard('employee')->user()->employee_id;
        $timesheets->date = $request->date;
        $timesheets->proj_name = $request->proj_name;
        $timesheets->department = $request->department;
        $timesheets->hr1 = $request->hr1;
        $timesheets->hr2 = $request->hr2;
        $timesheets->hr3 = $request->hr3;
        $timesheets->hr4 = $request->hr4;
        $timesheets->hr5 = $request->hr5;
        $timesheets->hr6 = $request->hr6;
        $timesheets->hr7 = $request->hr7;
        $timesheets->hr8 = $request->hr8;
        $timesheets->hr9 = $request->hr9;
        $timesheets->hr10 = $request->hr10;
        $timesheets->hr11 = $request->hr11;
        $timesheets->hr12 = $request->hr12;
        $timesheets->intime = $request->intime;
         $timesheets->outtime = $request->outtime;
        $timesheets->developer_name = $name;
        $timesheets->developer_id = $empid; 

        $timesheets->save();

        return redirect('EmpDailyTimeSheet')->with('success','Employee Timesheet Added Successfully');
    }

    public function logoutE()
    {
        Auth::guard('employee')->logout();
        return redirect('/');
    }

    public function deleteEmpDailySheet($id)
    {

        $timesheets =  Timesheet::find($id);
        $timesheets->delete();
        return redirect('EmpDailyTimeSheet')->with('success', 'Employee Timesheet Deleted Successfully');
    }


    public function AddLeave()
    {
        return view('Employee/AddLeave');
    }

    public function  aAddLeave(Request $request)
    { 
        
        
        $validator = Validator::make($request->all(), [
            
            'date' => 'required',
            'end_date' => 'required',
            'attachment' => 'required',
            'leave_reason' => 'required',
            'leave_days' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $n = "pending";
        $n2 = "No comments";
        
        if ($request->hasfile('attachment')) {
            $no = rand(00000000, 99999999);
            $image3 = $request->attachment;
            $extension3 = $no . '.' . $image3->getClientOriginalExtension();
            $attachment = $image3->getClientOriginalName();
            $image3->move(public_path('Admin/app-assets/images/employee'), $extension3);
        } 

        
        $name = Auth::guard('employee')->user()->full_name;
        
        $manageleaves = new  ManageLeave();
        $manageleaves->date = $request->date;
        $manageleaves->end_date= $request->end_date;
        $manageleaves->leave_status = $n;
        $manageleaves->comments = $n2;
        $manageleaves->attachment_file = $extension3;
        $manageleaves->attachment = $attachment;
        $manageleaves->leave_reason = $request->leave_reason;
        $manageleaves->leave_days = $request->leave_days;
        $manageleaves->name = $name;
         
        $manageleaves->save();
        
        return redirect('ApplyLeave')->with('success', 'Leave Added successfully.');
    }
    
    public function uploadCandidateFile(Request $request){
        
         $validator = Validator::make($request->all(), [
            
            'candidatefile' => 'required',
           
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        if ($request->hasfile('candidatefile')) {
            $no = rand(00000000, 99999999);
            $image3 = $request->candidatefile;
            $extension3 = $no . '.' . $image3->getClientOriginalExtension();
            $attachment = $image3->getClientOriginalName();
            $image3->move(public_path('Admin/app-assets/images/candidatefile'), $extension3);
        } 
        
        $monthlytrainings= Monthlytraining::find($request->user_id);
        $monthlytrainings->candidatefile=$extension3;
        $monthlytrainings->candidatefilename=$attachment;
        

        $monthlytrainings->update();
        
        return redirect('empmonthlytrainning');
    }


    public function deletetimesheetEmp($id)
    {
        $timesheets = Timesheet::find($id);
        $timesheets->delete();
        return redirect('EmpDailyTimeSheet')->with('success', 'Deleted Successfully');
    }

    public function EmployeeTaskStatus($id)
    {
        // $user = Auth::guard('employee')->user();
        $tasks =  Task::find($id);
        
        return view('Employee/EmployeeTaskStatus', compact('tasks'));
    }
    
    public function Edit_Status($id)
    {
        $editTask = Task::find($id);
       
        return view('Employee/editStatus', compact('editTask'));
    }
    
    public function update_Status(Request $request,$id)
    {
        $updateTask = Task::find($id);
        $updateTask->developer_status = $request->developer_status;
        $updateTask->qa_status = $request->qa_status;
        $updateTask->update();
       
        return Redirect('EmpTask')->with('success', 'Status Updated Successfully.');
    }
    
    public function download_Project($id)
    {
        
        return Response()->download(public_path('/Admin/app-assets/images/project/' . $id));
    }

    public function attendence()
    {
        $weekleytimesheets = Weekleytimesheet::all();
        return view('Employee/attendence',compact('weekleytimesheets'));
    }


    public function download_timesheetE($id)
    {
        
        return Response()->download(public_path('/Admin/app-assets/images/timesheet/' . $id));
    }
    public function empclient()
    {
        
        return view('Employee/empclient');
    }

    
    public function updateStatus($id,Request $request)
    {
        $trainings= Training::find($id);
        
        $trainings->status=$request->status;
        $trainings->update();
        return redirect('empTraning');
    }
    
    public function empTraning()
    {
      
        
           $user = Auth::guard('employee')->user()->id;
                
                 $trainings = Training::select('trainings.*')->whereJsonContains('members',"$user")->get();

                   return view('Employee/empTraning',compact('trainings')); 
                  
                    
                
    }
    
    
    public function applyresignation()
    {
        $user = Auth::guard('employee')->user()->id;
        $employees= Employee::find($user);
        return view('Employee/applyresignation',compact('employees'));
    }
    
    public function empperformancedetail()
    {
        
        return view('Employee/empperformancedetail');
    }

   public function updatetraining(Request $request,$id)
    {
        $trainings= Training::find($id);
        
        $trainings->status=$request->status;
        
        $trainings->update();
        
        return redirect('empTraning');
    }
    
    public function emptraining1($id)
    {
        $trainings= Training::find($id);
        return view('Employee/emptraining1',compact('trainings'));
    }
    public function empmonthlytrainning()
    {
           $user = Auth::guard('employee')->user()->id;
                
                 $monthlytrainings = Monthlytraining::select('monthlytrainings.*')->whereJsonContains('employee',"$user")->get();

                return view('Employee/empmonthlytrainning',compact('monthlytrainings'));
    }

    public function performanceemployee()
    {
        
        return view('Employee/performanceemployee');
    }

    public function viewFileM($id){
    $monthlytrainings= Monthlytraining::find($id);
            return Response()->make(file_get_contents(public_path('/Admin/app-assets/images/monthlytraining/' . $monthlytrainings->trainingfile)), 200, [
            'content-type'=>'application/pdf',
        ]);
    }

    public function viewcandidatefile($id){
        $monthlytrainings= Monthlytraining::find($id);
            return Response()->make(file_get_contents(public_path('/Admin/app-assets/images/candidatefile/' . $monthlytrainings->candidatefile)), 200, [
            'content-type'=>'application/pdf',
        ]);
        }
    
    public function resignationemployee()
    {
        
       $user = Auth::guard('employee')->user()->full_name;
         $resignations = Resignation::select('resignations.*')->where('fullname', '=', $user)->get();
        
       
        return view('Employee/resignationemployee',compact('resignations'));
    }

    public function applyResign(Request $request)
    {
       
        
          $validator = Validator::make($request->all(), [
            
            'fullname' => 'required',
            'employeeid' => 'required',
            'department' => 'required',
            'noticeperiod' => 'required',
            'resignationreaason' => 'required',
             'date' => 'required',
              'startdate' => 'required', 
              'enddate' => 'required',
              
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        
        
        $resignations =new Resignation();
        $n1="pending";
        $resignations->fullname=$request->fullname;
        $resignations->eid=$request->eid;
        $resignations->employeeid=$request->employeeid;
        $resignations->department=$request->department;
        $resignations->noticeperiod=$request->noticeperiod;
        $resignations->resignationreaason=$request->resignationreaason;
        $resignations->date=$request->date;
        $resignations->startdate=$request->startdate;
        $resignations->enddate=$request->enddate;
        $resignations->status=$n1;
        $resignations->comments=$n1;
      

        $resignations->save();
        
        return redirect('resignationemployee');
    }

    public function download_payslipE($id)
    {
        
        return Response()->download(public_path('/Admin/app-assets/images/payslip/' . $id));
    }


    public function payrolle()
    {
        // $user = Auth::guard('employee')->user()->;
        $mangepayslips = Mangepayslip::leftjoin('employees', 'mangepayslips.ename', '=', 'employees.id')
                             ->select('mangepayslips.*', 'employees.full_name')
                             ->get();
        
        return view('Employee/payrolle',compact('mangepayslips'));
    }


}

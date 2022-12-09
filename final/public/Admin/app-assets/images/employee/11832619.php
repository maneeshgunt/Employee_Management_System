<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


###############  AdminLogin  ############

Route::get('login', [AdminController::class, 'login']);


Route::middleware('adminmid:admin')->group(function () {
    Route::get('viewfile', [AdminController::class, 'viewfile']);
    Route::get('Dashboard', [AdminController::class, 'index'])->name('Dashboard');
    Route::get('logOut', [AdminController::class, 'logOut'])->name('logOut');
    Route::get('employee', [AdminController::class, 'employeeTimeSheet'])->name('employeeTimeSheet');
    Route::get('manageLeave', [AdminController::class, 'manageLeave'])->name('manageLeave');
    Route::get('project-creation', [AdminController::class, 'projectcreation'])->name('project-creation');
    Route::get('employeeList', [AdminController::class, 'employeeList'])->name('employeeList');
    Route::get('EditEmpTimeSheet/{id}', [AdminController::class, 'edit'])->name('editemptimesheet');
    Route::post('update/{id}', [AdminController::class, 'update'])->name('update');
    Route::get('deletetimesheet/{id}', [AdminController::class, 'deletetimesheet'])->name('deletetimesheet');
    Route::get('addProject', [AdminController::class, 'addproject'])->name('addproject');
    Route::get('taskCreation/{id}', [AdminController::class, 'taskCreation'])->name('taskCreation');
    Route::get('delete/{id}', [AdminController::class, 'deleteproject'])->name('deleteproject');
    Route::get('editProject/{id}', [AdminController::class, 'editProject'])->name('editProject');
    Route::post('updateproject/{id}', [AdminController::class, 'updateproject'])->name('updateproject');
    Route::post('AddProject', [AdminController::class, 'addProjects'])->name('AddProjects');
    Route::get('addTask/{id}', [AdminController::class, 'addTask'])->name('addTask');
    Route::get('deletetask/{id}', [AdminController::class, 'deletetask'])->name('deletetask');
    Route::get('editTask/{id}', [AdminController::class, 'editTask'])->name('editTask');
    Route::post('Update-Task/{id}', [AdminController::class, 'Update_Task'])->name('Update_Task');
    Route::post('saveTask', [AdminController::class, 'saveTask'])->name('saveTask');
    Route::get('deleteEmployeeList/{id}', [AdminController::class, 'deleteEmployeeList'])->name('deleteEmployeeList');
    Route::get('deleteLeaves/{id}', [AdminController::class, 'deleteLeaves'])->name('deleteLeaves');
    Route::get('editEmployee/{id}', [AdminController::class, 'editEmployee'])->name('editEmployee');
    Route::post('Update-Employee/{id}', [AdminController::class, 'updateEmployee'])->name('Update-Employee');
    Route::get('editLeave/{id}', [AdminController::class, 'editLeave'])->name('editLeave');
    Route::post('editLeaveStatus/{id}', [AdminController::class, 'editLeaveStatus'])->name('editLeaveStatus');
    Route::get('addEmployee', [AdminController::class, 'addEmployee'])->name('addEmployee');
    Route::post('addEmp', [AdminController::class, 'addEmp'])->name('addEmp');
    Route::get('create-team', [AdminController::class, 'createTeam'])->name('create-team');
    Route::get('Add-Team', [AdminController::class, 'show_add_Team'])->name('Add-Team');
    Route::post('Add-Team', [AdminController::class, 'add_Team'])->name('Add-Team');
    Route::get('Edit-Team/{id}', [AdminController::class, 'Show_Edit_Team'])->name('Edit-Team');
    Route::post('Edit-Team/{id}', [AdminController::class, 'Edit_Team'])->name('Edit-Team');
    Route::post('members', [AdminController::class, 'json_Members'])->name('members');
    Route::get('DeleteTeam/{id}', [AdminController::class, 'DeleteTeam'])->name('DeleteTeam');
    Route::get('weekleytimesheet1', [AdminController::class, 'weekleytimesheet1'])->name('weekleytimesheet1');
    Route::get('client', [AdminController::class, 'client'])->name('client');
    Route::get('perfomance', [AdminController::class, 'perfomance'])->name('perfomance');
    Route::get('learninganddev', [AdminController::class, 'learninganddev'])->name('learninganddev');
    Route::get('recrupment', [AdminController::class, 'recrupment'])->name('recrupment');
    Route::get('payrollIndex', [AdminController::class, 'payrollIndex'])->name('payrollIndex');
    Route::get('weekleytimesheet', [AdminController::class, 'weekleytimesheet'])->name('weekleytimesheet');
    Route::get('seperationadmin', [AdminController::class, 'seperationadmin'])->name('seperationadmin');
    Route::get('addTotalPerfomance', [AdminController::class, 'addTotalPerfomance'])->name('addTotalPerfomance');
    Route::get('addperfomance', [AdminController::class, 'addperfomance'])->name('addperfomance');
    Route::get('admineditperfomance', [AdminController::class, 'admineditperfomance'])->name('admineditperfomance');
    Route::get('addperfomance', [AdminController::class, 'addperfomance'])->name('addperfomance');
    Route::get('addmonthlytraining', [AdminController::class, 'addmonthlytraining'])->name('addmonthlytraining');
    Route::get('addTraning', [AdminController::class, 'addTraning'])->name('addTraning');
    Route::get('addmonthlyTraningInfo', [AdminController::class, 'addmonthlyTraningInfo'])->name('addmonthlyTraningInfo');
    Route::get('manageSalaryM', [AdminController::class, 'manageSalaryM'])->name('manageSalaryM');
    Route::get('payroll1', [AdminController::class, 'payroll1'])->name('payroll1');
    Route::get('addpayslip', [AdminController::class, 'addpayslip'])->name('addpayslip');
    Route::post('editpaySlip/{id}', [AdminController::class, 'editpaySlip'])->name('editpaySlip');
    Route::get('payroll', [AdminController::class, 'payroll'])->name('payroll');
    Route::get('viewPayroll', [AdminController::class, 'viewPayroll'])->name('viewPayroll');
    Route::get('salaryslip', [AdminController::class, 'salaryslip'])->name('salaryslip');
    Route::get('resignation', [AdminController::class, 'resignation'])->name('resignation');
    Route::get('seperation', [AdminController::class, 'seperation'])->name('seperation');
    Route::get('aproveresignation/{id}', [AdminController::class, 'aproveresignation']);
    Route::post('uploadweekelytimesheet', [AdminController::class, 'uploadweekelytimesheet'])->name('uploadweekelytimesheet');
    Route::get('download_timesheet/{id}', [AdminController::class, 'download_timesheet']);
    Route::post('addTraning1', [AdminController::class, 'addTraning1'])->name('addTraning1');
    Route::post('addtrainingInfo', [AdminController::class, 'addtrainingInfo'])->name('addtrainingInfo');
    Route::get('viewtrainingfile/{id}', [AdminController::class, 'viewtrainingfile']);
    Route::post('approveReg/{id}', [AdminController::class, 'approveReg']);
    Route::post('uploadtermination', [AdminController::class, 'uploadtermination'])->name('uploadtermination');
    Route::post('payslip', [AdminController::class, 'payslip'])->name('payslip');
    Route::get('deletepayslip/{id}', [AdminController::class, 'deletepayslip'])->name('deletepayslip');
    Route::get('download_payslip/{id}', [AdminController::class, 'download_payslip']);
    Route::get('editPpayslip/{id}', [AdminController::class, 'editPpayslip']);
    

    
     ######### leave Download ########
     Route::get('dowload_requirement/{id}', [AdminController::class, 'dowload_Requirement']);
});


Route::get('login', [AdminController::class, 'login'])->name('login');


Route::post('verify', [AdminController::class, 'verify'])->name('verify');

##################################### EmployeePanel  ############################################


Route::middleware('authemployee:employee')->group(function () {
    
    Route::get('logoutE', [EmployeeController::class, 'logoutE'])->name('logoutE');
    Route::get('indexE', [EmployeeController::class, 'indexE'])->name('indexE');
    Route::get('EmpDailyTimeSheet', [EmployeeController::class, 'EmpDailyTimeSheet'])->name('EmpDailyTimeSheet');
    Route::get('ApplyLeave', [EmployeeController::class, 'ApplyLeave'])->name('ApplyLeave');
    Route::get('EmpTask', [EmployeeController::class, 'EmpTask'])->name('EmpTask');
    Route::get('addTimesheet', [EmployeeController::class, 'addTimesheet'])->name('addTimesheet');
    Route::post('aAddTimesheet', [EmployeeController::class, 'aAddTimesheet'])->name('aAddTimesheet');
    Route::get('deleteEmpDailySheet/{id}', [EmployeeController::class, 'deleteEmpDailySheet'])->name('deleteEmpDailySheet');
    Route::get('AddLeave', [EmployeeController::class, 'AddLeave'])->name('AddLeave');
    Route::post('aAddLeave', [EmployeeController::class, 'aAddLeave'])->name('aAddLeave');
    Route::get('EmployeeTaskStatus/{id}', [EmployeeController::class, 'EmployeeTaskStatus'])->name('EmployeeTaskStatus');
    Route::get('Edit-status/{id}', [EmployeeController::class, 'Edit_Status']);
    Route::post('Update-Status/{id}', [EmployeeController::class, 'update_Status'])->name('Update-Status');
    Route::get('download_project/{id}', [EmployeeController::class, 'download_Project']);
    Route::get('profileEmp', [EmployeeController::class, 'profileEmp'])->name('profileEmp');
    Route::post('profileUpdate', [EmployeeController::class, 'profileUpdate'])->name('profileUpdate');
    Route::get('attendence', [EmployeeController::class, 'attendence'])->name('attendence');
    Route::get('empclient', [EmployeeController::class, 'empclient'])->name('empclient');
    Route::get('empTraning', [EmployeeController::class, 'empTraning'])->name('empTraning');
    Route::get('performanceemployee', [EmployeeController::class, 'performanceemployee'])->name('performanceemployee');
    Route::get('resignationemployee', [EmployeeController::class, 'resignationemployee'])->name('resignationemployee');
    Route::get('payrolle', [EmployeeController::class, 'payrolle'])->name('payrolle');
    Route::get('empmonthlytrainning', [EmployeeController::class, 'empmonthlytrainning'])->name('empmonthlytrainning');
    Route::get('empperformancedetail', [EmployeeController::class, 'empperformancedetail'])->name('empperformancedetail');
    Route::get('applyresignation', [EmployeeController::class, 'applyresignation'])->name('applyresignation');
    Route::get('download_timesheetE/{id}', [EmployeeController::class, 'download_timesheetE']);
    Route::post('updateStatus/{id}', [EmployeeController::class, 'updateStatus']);
    Route::get('viewFileM/{id}', [EmployeeController::class, 'viewFileM']);
    Route::get('emptraining1/{id}', [EmployeeController::class, 'emptraining1']);
    Route::get('viewcandidatefile/{id}', [EmployeeController::class, 'viewcandidatefile']);
    Route::post('applyResign', [EmployeeController::class, 'applyResign'])->name('applyResign');
    Route::get('download_payslipE/{id}', [EmployeeController::class, 'download_payslipE']);
    
});


Route::get('/', [EmployeeController::class, 'loginE'])->name('loginE');
Route::post('verifyE', [EmployeeController::class, 'verifyE'])->name('verifyE');

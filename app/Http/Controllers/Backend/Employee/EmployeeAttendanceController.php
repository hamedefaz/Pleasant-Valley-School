<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AssignStudent;
use App\Model\Session;
use App\Model\StudentClass;
use App\Model\StudentShift;
use App\Model\EmployeeSalaryLog;
use App\Model\Designation;
use App\Model\LeavePurpose;
use App\Model\EmployeeLeave;
use App\Model\EmployeeAttendance;
use App\User;
use DB;
use PDF;

class EmployeeAttendanceController extends Controller
{
    public function view(){
        $data['allData'] = EmployeeAttendance::orderBy('id','desc')->get();
        return view('backend.employee.employee_attendance.view-employee-attendance', $data);
    }

    public function add(){
        $data['employees'] = User::where('usertype', 'employee')->get();
        $data['leave_purpose'] = LeavePurpose::all();
        return view('backend.employee.employee_attendance.add-employee-attendance', $data);
    }

    public function store(Request $request){
        $countEmployee= count($request->employee_id);
        for($i=0; $i < $countEmployee; $i++){
            $attend_status = 'attend_status'.$i;
            $attend = new EmployeeAttendance();
            $attend->date = date('Y-m-d', strtotime($request->date));
            $attend->employee_id = $request->employee_id[$i];
            $attend->attend_status = $request->$attend_status;
            $attend->save();
        }

        return redirect()->route('employees.attendance.view')->with('success', 'Data Insertion Successful!');
    }
}

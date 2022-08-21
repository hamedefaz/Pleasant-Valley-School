<?php

namespace App\Http\Controllers\Backend\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AssignStudent;
use App\Model\Session;
use App\Model\StudentClass;
use App\Model\StudentShift;
use App\Model\StudentMarks;
use App\Model\Subject;
use App\Model\ExamType;
use App\Model\EmployeeAttendance;
use App\Model\EmployeeLeave;
use App\User;
use DB;
use Mpdf\Tag\Tr;
use PDF;

class ReportsController extends Controller
{
    public function attendanceView(){
        $data['employees'] = User::where('usertype','employee')->get();
        return view('backend.report.view-attendance', $data);
    }

    public function attendanceGet(Request $request){
        $employee_id = $request->employee_id;
        if($employee_id != ''){
            $where[] = ['employee_id', $employee_id];
        }
        $date = date('Y-m', strtotime($request->date));
        if($date != ''){
            $where[] = ['date', 'like', $date.'%'];
        }
        $singleAttendance = EmployeeAttendance::with(['user'])->where($where)->first();
        if($singleAttendance == true){
            $data['allData'] = EmployeeAttendance::with(['user'])->where($where)->get();
            $data['absents'] = EmployeeAttendance::with(['user'])->where($where)->where('attend_status', 'Absent')->get()->count();
            $data['leaves'] = EmployeeAttendance::with(['user'])->where($where)->where('attend_status', 'Leave')->get()->count();
            $data['month'] = date('M Y', strtotime($request->date));
            $pdf = PDF::loadView('backend.report.pdf.attendance-pdf', $data);
            $pdf->SetProtection(['copy', 'print'], '', 'pass');
            return $pdf->stream('document.pdf');
        }else{
            return redirect()->back()->with('error', "Sorry! Criteria does not match!");
        }
    }
}

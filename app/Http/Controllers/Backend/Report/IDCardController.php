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
use App\User;
use DB;
use Mpdf\Tag\Tr;
use PDF;

class IDCardController extends Controller
{
    public function idCardView(){
        $data['years'] = Session::orderBy('id','desc')->get();
        $data['classes'] = StudentClass::all();
        return view('backend.report.view-id-card', $data);
    }

    public function idCardGet(Request $request){
        $year_id = $request->year_id;
        $class_id = $request->class_id;

        $check_data = AssignStudent::where('year_id', $year_id)->where('class_id', $class_id)->first();
        if($check_data == true){
            $data['allData'] = AssignStudent::where('year_id', $year_id)->where('class_id', $class_id)->first()->get();
            $pdf = PDF::loadView('backend.report.pdf.id-card-pdf', $data);
            $pdf->SetProtection(['copy', 'print'], '', 'pass');
            return $pdf->stream('document.pdf');
        }else{
            return redirect()->back()->with('error', "Sorry! Criteria does not match!");
        }
    }
}

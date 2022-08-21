<?php

namespace App\Http\Controllers\Backend\Marks;

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
use PDF;

class MarksController extends Controller
{
    public function view(){
        $data['allData'] = StudentMarks::orderBy('id','desc')->get();
        return view('backend.marks.view-student-marks', $data);
    }

    public function add(){
        $data['students'] = User::where('usertype', 'student')->get();
        $data['subjects'] = Subject::all();
        $data['examtypes'] = ExamType::all();
        $data['sessions'] = Session::all();
        $data['classes'] = StudentClass::all();
        return view('backend.marks.add-student-marks', $data);
    }

    public function store(Request $request){

        $marks = new StudentMarks();
        $marks->student_id = $request->student_id;
        $marks->assign_subject_id = $request->assign_subject_id;
        $marks->exam_type_id = $request->exam_type_id;
        $marks->marks = $request->mark_no;
        $marks->grade = $request->grade_no;
        $marks->year_id = $request->year_id;
        $marks->class_id = $request->class_id;
        $marks->save();

        return redirect()->route('marks.view')->with('success', 'Data Insertion Successful!');
    }

    public function edit($id){
        $data['editData'] = StudentMarks::find($id);
        $data['students'] = User::where('usertype', 'student')->get();
        $data['subjects'] = Subject::all();
        $data['examtypes'] = ExamType::all();
        $data['sessions'] = Session::all();
        $data['classes'] = StudentClass::all();
        return view('backend.marks.add-student-marks', $data);
    }

    public function update(Request $request, $id){

        $marks = StudentMarks::find($id);
        $marks->student_id = $request->student_id;
        $marks->assign_subject_id = $request->assign_subject_id;
        $marks->exam_type_id = $request->exam_type_id;
        $marks->marks = $request->mark_no;
        $marks->grade = $request->grade_no;
        $marks->year_id = $request->year_id;
        $marks->class_id = $request->class_id;
        $marks->save();

        return redirect()->route('marks.view')->with('success', 'Data Updated Successfully!');
    }
}

<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\ExamType;
use DB;

class ExamTypeController extends Controller
{
    public function view(){
        $data['allData'] = ExamType::all();
        return view('backend.setup.exam_type.view-exam-type', $data);
    }

    public function add(){
        return view('backend.setup.exam_type.add-exam-type');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:exam_types,name'
        ]);

        $data = new ExamType();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('setups.exam.type.view')->with('success', 'Data insertion successful!');
    }

    public function edit($id){
        $editData = ExamType::find($id);
        return view('backend.setup.exam_type.add-exam-type', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = ExamType::find($id);
        $this->validate($request,[
            'name'=>'required|unique:exam_types,name,'.$data->id
        ]);

        $data->name = $request->name;
        $data->save();
        return redirect()->route('setups.exam.type.view')->with('success', 'Data Updated successfully!');
    }

    public function delete($id){
        $data = ExamType::find($id);
        $data->delete();
        return redirect()->route('setups.exam.type.view')->with('success', 'Data deletion successful!');
    }
}

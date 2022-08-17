<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Subject;
use DB;

class SubjectController extends Controller
{
    public function view(){
        $data['allData'] = Subject::all();
        return view('backend.setup.subject.view-subject', $data);
    }

    public function add(){
        return view('backend.setup.subject.add-subject');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:subjects,name'
        ]);

        $data = new Subject();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('setups.subject.view')->with('success', 'Data insertion successful!');
    }

    public function edit($id){
        $editData = Subject::find($id);
        return view('backend.setup.subject.add-subject', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = Subject::find($id);
        $this->validate($request,[
            'name'=>'required|unique:subjects,name,'.$data->id
        ]);

        $data->name = $request->name;
        $data->save();
        return redirect()->route('setups.subject.view')->with('success', 'Data Updated successfully!');
    }

    public function delete($id){
        $data = Subject::find($id);
        $data->delete();
        return redirect()->route('setups.subject.view')->with('success', 'Data deletion successful!');
    }
}

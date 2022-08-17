<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Session;
use DB;

class SessionController extends Controller
{
    public function view(){
        $data['allData'] = Session::all();
        return view('backend.setup.session.view-session', $data);
    }

    public function add(){
        return view('backend.setup.session.add-session');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:sessions,name'
        ]);

        $data = new Session();
        $data->name = $request->name;
        $data->save();
        return redirect()->route('setups.student.session.view')->with('success', 'Data insertion successful!');
    }

    public function edit($id){
        $editData = Session::find($id);
        return view('backend.setup.session.add-session', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = Session::find($id);
        $this->validate($request,[
            'name'=>'required|unique:sessions,name,'.$data->id
        ]);

        $data->name = $request->name;
        $data->save();
        return redirect()->route('setups.student.session.view')->with('success', 'Data Updated successfully!');
    }

    public function delete($id){
        $data = Session::find($id);
        $data->delete();
        return redirect()->route('setups.student.session.view')->with('success', 'Data deletion successful!');
    }
}

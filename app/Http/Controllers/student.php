<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use App\semesterlist;
class student extends Controller
{
    public function studentManage(){
        $studentlist = students::all();
        return view('Admin.student-manage', compact('studentlist'));
    }
    
    public function storeStudent(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'roll' => 'required',
            'semester' => 'required',
        ]);
        students::create($request->all());
        return back()->with('message',"student added sucessfully");
    }
    
    public function editStudent($id){
        $studentDetails = students::find($id);
        return view('Admin.student-edit', compact('studentDetails'));
    }
    
    public function updateStudent($id){
        $student = students::findOrFail($id);
        $student->name = request('name');
        $student->roll = request('roll');
        $student->semester = request('semester'); 
        $student->department = request('department');
        $student->save();  
        return redirect()->to('manage-student')->with('message','Student Data Update Successfully');
    }
    
    public function tempSubjectStore(){
        
    }
    
    public function addResult($id){
        $StudentProfile = students::where('id',$id)->first();
        return view('Admin.result-add', compact('StudentProfile'));
    }
    
    public function storeResult(Request $request){
        
    }
    
    public function uniqueStudent(Request $request){
        $roll = $request->get('roll');
        $class = $request->get('class');
        $student = students::where('semester',$class)->where('roll',$roll)->first();
        if(!empty($student)){
            return ['success'=>true,'message'=>'1'];
        }
        else{
            return ['success'=>true,'message'=>'0'];
        }
        //return ['success'=>true,'message'=>'0'];
    }
}

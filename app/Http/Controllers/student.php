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
}

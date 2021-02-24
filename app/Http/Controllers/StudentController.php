<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Illuminate\Foundation\Console\Presets\React;

class StudentController extends Controller
{
    public function viewStudent()
    {
        $user = Auth::user();
        return view('form.studen',compact('user',$user));
    }
    public function inputScore()
    {
        $user = Auth::user();
        return view('form.subject_all',compact('user',$user));
    }

    public function insertStudent(Request $request)
    {
        $insert = [
            'id_student'      =>	$request->idStudent,
            'name' 	          =>	$request->nameStudent,
            'sex' 	          =>	$request->sexStudent,
            'age' 	          =>	$request->ageStudent,
            'email'           =>	$request->emailStudent,
            'phone_number'    =>	$request->phoneStudent
        ];
        // return dd($insert);
        DB::table('students')->insert($insert);
        return redirect()->back()->with('insertStudent','.');
    }
    public function reportStudent()
    {
        $user = Auth::user();
        $reportStudent = DB::table('students')
            ->get();
        return view('report.report_student',compact('user',$user,'reportStudent'));
    }

    // update student
    public function updateStudent(Request $request)
    {
        $updateStudent = [
            'id' 		      =>	$request->idUpdate,
            'id_student'      =>	$request->idStudent,
            'name' 	          =>	$request->nameStudent,
            'sex' 	          =>	$request->sexStudent,
            'age' 	          =>	$request->ageStudent,
            'email'           =>	$request->emailStudent,
            'phone_number'    =>	$request->phoneStudent
        ];
        // return dd($updateStudent);
        DB::table('students')->where('id',$request->idUpdate)->update($updateStudent);
        return redirect()->back()->with('updateStudent','.');
    }
    public function deleteStudent($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return redirect()->back()->with('deleteStudent','.');
    }
}

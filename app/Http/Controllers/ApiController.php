<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function create(Request $request){
    $students = new Student();

    $students->fname = $request->input('fname');
    $students->lname = $request->input('lname');
    $students->email = $request->input('email');
    $students->password = $request->input('password');
    $students->save();

    return response()->json($students);
    }

    public function show(){
        $students = Student::all();
        return response()->json($students);
    }

    public function showbyid($id){
        $students = Student::find($id);
        return response()->json($students);
    }

    public function updatebyid(Request $request,$id){
        $students = Student::find($id);
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');
        $students->save();

        return response()->json($students);
    }

    public function delete(Request $request,$id){
        $students = Student::find($id);
        $students->delete();
        return response()->json($students);
    }
}
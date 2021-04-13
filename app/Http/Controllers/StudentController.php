<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
    public function allStudent(){

        $students = Student::paginate(20);
        return view('index', compact('students'));
    }
    public function add(){
        return view('add');
    }

    public function addToDB(Request $request){
        Student::insert([
            
            'erp'=>$request['erp'],
            'name'=>$request['name'],
            'stream'=>$request['stream'],
            'year'=>$request['year'],
            'semester'=>$request['semester'],
            'pointer'=>$request['pointer']
        ]);
        return redirect(route('students.allstudent'));;
    }
    public function student($erp){
        $student = Student::all()->where('erp', $erp)->first();
        return view('student', compact('student'));
    }
    public function edit($erp){
        $student = Student::all()->where('erp', $erp)->first();
        return view('edit', compact('student'));
    }
    public function editToDB(Request $request){
        DB::table('students')->where('erp', $request['erp'])->update([
            'erp'=>$request['erp'],
            'name'=>$request['name'],
            'stream'=>$request['stream'],
            'year'=>$request['year'],
            'semester'=>$request['semester'],
            'pointer'=>$request['pointer']
        ]);
        return redirect(route('students.allstudent'));;
    }

    public function delete($erp){
        DB::table('students')->where('erp', $erp)->delete();
        return redirect(route('students.allstudent'));;
    }

}

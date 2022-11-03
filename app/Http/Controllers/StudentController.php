<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admission;

class StudentController extends Controller
{
    function index(){
        $studentList    =   new Admission();
        $data = $studentList->all()->sortDesc();
        return view('student-list')->with("studnetListing",$data->toArray());
    }
    function destroy($id){
        $student =  Admission::find($id);
        if(!is_null($student)){
            $student->delete();
        }
       return redirect('student-list');
    }
}

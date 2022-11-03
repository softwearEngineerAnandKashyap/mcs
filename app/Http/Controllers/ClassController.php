<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\ClassSection;
use App\models\ClassAdd;
use App\models\Subject;
use App\models\ClassAssign;

class ClassController extends Controller
{
    public function sectionView(){
        $getList    =   ClassSection::all()->sortDesc();
        return view('section')->with('list',$getList->toArray());
    }

    public function storeSection(request $request){
        $section  =  new ClassSection;
        $request->validate([
            "section" => "required",
            "capacity"=> "required"
        ]);
        $section->section_name  =       $request->section;
        $section->capcity       =       $request->capacity;
        $section->save();
        return redirect('section')->with('message','Section Store Successfully');

    }
    public function deleteSection($id){
        $feesObj   =    ClassSection::find($id);
        if(!is_null($feesObj)){
            $feesObj->delete();
        }
        return redirect('section');
    }

    // Add Class Methods
    function viewAddClass(){
        $getList    =   ClassAdd::all()->sortDesc();

        return view('student-class')->with('list',$getList->toArray());
    }
    function storeClass(request $request){
        $storeClass = new ClassAdd;
        $request->validate([
            "className"  => "required"
        ]);
        $storeClass->class_name       =   $request->className;
        $storeClass->numeric          =   $request->numeric;
        $storeClass->section          =   $request->section;
        $storeClass->save();
        return redirect('student-class')->with('message','Class Add Successfully');
    }
    public function deleteClass($id){
        $feesObj   =    ClassAdd::find($id);
        if(!is_null($feesObj)){
            $feesObj->delete();
        }
        return redirect('student-class');
    }
    // Subject Methods
    public function subjectView(){
        $getList    = subject::all()->sortDesc();
        return view('subject')->with('list',$getList->toArray());
    }
    public function storeSubject(request $request){
        $storeSubject   =   new subject;
        $request->validate([
            "subjectName"  => "required",
            "subjectCode"  => "required",
            "subjectType"  => "required"
        ]);
        $storeSubject->name             =   $request->subjectName;
        $storeSubject->code             =   $request->subjectCode;
        $storeSubject->subject_type     =   $request->subjectType;
        $storeSubject->save();
        return redirect('class-subject')->with('message','Subject Add Successfully');
    }
    public function delteSubject($id){
        $feesObj   =    subject::find($id);
        if(!is_null($feesObj)){
            $feesObj->delete();
        }
        return redirect('class-subject');
    }
    // Class Assign Methods
    public function classAssignView(){
        return view('class-assign');
    }
    public function storeClassAssign(request $request){
        $classAssign = new ClassAssign;
        $request->validate([
            "assignClass"  => "required",
            "assignSection"=>   "required",
            "assignSubject"=>   "required"
        ]);
        $classAssign->class             =   $request->assignClass;
        $classAssign->section            =   $request->assignSection;
        $classAssign->subject           =   $request->assignSubject;
        $classAssign->save();
        return redirect('class-assign')->with('message','Class Assign Successfully');
    }
}

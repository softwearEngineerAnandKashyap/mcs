<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\admission;
use App\models\categories;

class AdmissionController extends Controller
{
    public function index(){

        $getData    =   Categories::all()->sortDesc();
        return view('admission-form')->with('categories_list',$getData->toArray());
    }
   
    public function store(Request $request){
        $admission  =   new Admission;
        $request->validate([
            "academic_details"  =>      "required",
            "addmission_no"     =>      "required",
            "roll_no"           =>      "required"
        ]);
        // Profile Pic Check @Anand
        $fileProfile = $request->file('profile_photo');
        $profileRenameHash = $fileProfile->hashName(); // Generate a unique, random name...
        $extension = $fileProfile->extension(); // Determine the file's extension based on the file's MIME type...
        $request->file('profile_photo')->getClientOriginalName();
        $path = $request->file('profile_photo')->store('addmission_images');
        // Profile Pic Check & Ends @Anand Kumar 07-10-2022
        // Father Profile Photo Check Anand    
        $fatherProfilePic   =   $request->file('father_photo');
        $fatherProfileHas   =   $fatherProfilePic->hashName(); // Generate a unique, random name...
        $extensionFather    =   $fatherProfilePic->extension();
        $request->file('father_photo')->store('father_pic');
        // Check Anand End Same Date
        // Father Profile Photo Check Anand    
        $motherProfilePic   =   $request->file('mother_photo');
        $motherProfileHas   =   $motherProfilePic->hashName(); // Generate a unique, random name...
        $extensionmother    =   $motherProfilePic->extension();
        $request->file('mother_photo')->store('mother_pic');
        // Check Anand End Same Date
        $admission->academic_details =  $request->academic_details;
        $admission->addmission_no    =  $request->addmission_no;
        $admission->roll_no          =  $request->roll_no;        
        $admission->addmission_date  =  $request->addmission_date ;
        $admission->class            =  $request->class;          
        $admission->section          =  $request->section;        
        $admission->categorie        =  $request->categorie;      
        $admission->Fname            =  $request->Fname;
        $admission->Lname =  $request->Lname;
        $admission->gender	 =  $request->gender;
        $admission->Bgroup	 =  $request->Bgroup;
        $admission->dob =  $request->dob;
        $admission->mother_tang =  $request->mother_tang;
        $admission->religion =  $request->religion;
        $admission->cast =  $request->cast;
        $admission->city =  $request->city;
        $admission->state =  $request->state;
        $admission->address =  $request->address;
        $admission->permanent_address =  $request->permanent_address;
        $admission->profile_photo =  $profileRenameHash;
        $admission->phoneNo =  $request->phoneNo;
        $admission->password =  $request->password;
        $admission->father_name =  $request->father_name;
        $admission->father_education =  $request->father_education;
        $admission->father_occupation =  $request->father_occupation;
        $admission->father_incomes =  $request->father_incomes;
        $admission->father_phone =  $request->father_phone;
        $admission->father_emaild =  $request->father_emaild;
        $admission->mother_edu =  $request->mother_edu;
        $admission->mother_occupation =  $request->mother_occupation;
        $admission->mother_inocme =  $request->mother_inocme;
        $admission->mother_phone =  $request->mother_phone;
        $admission->mother_email =  $request->mother_email;
        $admission->guardian_city =  $request->guardian_city;
        $admission->guardian_state =  $request->guardian_state;
        $admission->guardian_address =  $request->guardian_address;
        $admission->father_photo =  $fatherProfileHas;
        $admission->mother_photo =  $motherProfileHas ;
        $admission->route =  $request->route;
        $admission->vehicle_no =  $request->vehicle_no;
        $admission->previous_school_name =  $request->previous_school_name;
        $admission->remarks =  $request->remarks;
        $admission->save();
        return redirect('admission-form')->with('message','Category Created Succssfully');

    }
}

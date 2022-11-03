<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;

class EmployeeController extends Controller
{
    
    public function departmentView(){
        $getData    =   Department::all()->sortDesc();
        return view('department')->with('list',$getData->toArray());
    }

    public function storeDepartment(request $request){
        $feesObj   =   new Department;
        $request->validate([
            "departmentName" => "required"
        ]);
        $feesObj->department_name = $request->departmentName;
        $feesObj->save();
        return redirect('department')->with('message','Data Store Successfully');
    }

    public function destroyDepartment($id){
        $feesObj   =    Department::find($id);
        if(!is_null($feesObj)){
            $feesObj->delete();
        }
        return redirect('department');
    }
    // Designation Method Start
    public function viewDesignation(){
        $getData    =   Designation::all()->sortDesc();
        return view('designation')->with('list',$getData->toArray());
    }

    public function storeDesignation(request $request){
        $feesObj   =   new Designation;
        $request->validate([
            "designationName" => "required"
        ]);
        $feesObj->designationName = $request->designationName;
        $feesObj->save();
        return redirect('designation')->with('message','Data Store Successfully');
    }

    public function destroyDesignation($id){
        $feesObj   =    Designation::find($id);
        if(!is_null($feesObj)){
            $feesObj->delete();
        }
        return redirect('designation');
    }
    // Add Employee

    public function addEmployeeView(){
        $department    =   Department::all()->sortDesc();
        $designation   =   Designation::all()->sortDesc();
        return view('add-employee')->with('department',$department->toArray())->with('designation',$designation->toArray());
    }

    public function storeEmployee(request $request){
       
        $employee = new Employee;
       
        $fileProfile = $request->file('profilePic');
        $filename= date('YmdHi').$fileProfile->getClientOriginalName();
        $extension = $fileProfile->extension(); // Determine the file's extension based on the file's MIME type...
        $path = $request->file('profilePic')->store('public/employeePictures');

        $employee->roleType = $request->roleType;
        $employee->designation = $request->designation;
        $employee->department = $request->department;
        $employee->joiningDate = $request->JoinigDate;
        $employee->qualification = $request->qualification;
        $employee->experience = $request->experience;
        $employee->experienceDetails = $request->experienceDetails;
        $employee->name = $request->employeeName;
        $employee->dob = $request->DOB;
        $employee->gender = $request->gender;
        $employee->bloodGroup = $request->bloodGroup;
        $employee->religion = $request->religion;
        $employee->mobileNo = $request->mobileNo;
        $employee->emailId = $request->emailId;
        $employee->presentAddress = $request->presentAddress;
        $employee->permanentAddress = $request->pAddress;
        $employee->profile_photo = $filename;
        $employee->L_PhoneNo = $request->lPhoneNo;
        $employee->L_Password = $request->lPassword;
        $employee->bankName = $request->bankName;
        $employee->holderName = $request->holderName;
        $employee->branchName = $request->branchName;
        $employee->bankAddress = $request->bankAddress;
        $employee->IFSC_Code = $request->ifscCode;
        $employee->AccountNo = $request->accountNo;
        $employee->save();
        return redirect('add-employee')->with('message','Employee Add Successfully');
    }

    // Emoloyee Listing View
    public function employeeListing(){
        $employeeList = employee::all()->sortDesc();
        return view('employees')->with('list',$employeeList->toArray());
    }

    public function destroyList($id){
        $feesObj   =    employee::find($id);
        if(!is_null($feesObj)){
            $feesObj->delete();
        }
        return redirect('employees');
    }
}

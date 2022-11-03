<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Fees_Type;

class FeesTypeController extends Controller
{
    public function index(){
        $getData    =   Fees_Type::all()->sortDesc();
        return view('fees-type')->with('list',$getData->toArray());
    }

    public function store(request $request){
        $feesObj   =   new Fees_Type;
        $request->validate([
            "feesType" => "required",
            "feesDescription" => "required",
        ]);
        $feesObj->fees_type = $request->feesType;
        $feesObj->fees_description = $request->feesDescription;
        $feesObj->save();
        return redirect('fees-type')->with('message','Data Store Successfully');
    }
    function destroyFeesType($id){
        $feesObj   =    Fees_Type::find($id);
            if(!is_null($feesObj)){
                $feesObj->delete();
            }
        return redirect('fees-type');
    }
}

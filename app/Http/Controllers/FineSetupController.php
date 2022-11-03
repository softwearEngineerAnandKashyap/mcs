<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Fine_Setup;


class FineSetupController extends Controller
{
    public function index(){
        $getData    =   Fine_Setup::all()->sortDesc();
        return view('fine-setup')->with('list',$getData->toArray());
    }

    public function fineSetupStore(Request $request){
        $fineSetup  =   new Fine_Setup;
        $request->validate([
            "fineYear" => "required",
            "fineType" => "required",
            "fineValue" => "required",
            "lateFeeFreq" => "required"
        ]);
        $fineSetup->fineYear = $request->fineYear;
        $fineSetup->fineType = $request->fineType;
        $fineSetup->fineValue = $request->fineValue;
        $fineSetup->lateFeeFrequency = $request->lateFeeFreq;
        $fineSetup->save();
        return redirect('fine-setup')->with('message','Data Store Successfully');

        
    }
    public function fineSetupDestroy($id){
        $feesObj   =    Fine_Setup::find($id);
            if(!is_null($feesObj)){
                $feesObj->delete();
            }
        return redirect('fine-setup');
    }
}

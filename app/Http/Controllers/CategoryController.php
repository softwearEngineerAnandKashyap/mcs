<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function index(){
        $getData    =   Category::all()->sortDesc();
        return view('category')->with('list',$getData->toArray());
    }

    function storeCategory(Request $request){
        $store   =   new Category;
        $request->validate([
            "category" => "required"
        ]);
        $store->categoryName = $request->category;
        $store->save();
        return redirect('category')->with('message','Category Created Succssfully');

    }
    function destroyCategory($id){
        $customer =  Category::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
       return redirect('category');
    }

}

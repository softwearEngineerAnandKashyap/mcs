<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FeesTypeController;
use App\Http\Controllers\FineSetupController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ClassController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('category',[CategoryController::class,'index']);
Route::post('storeCategory',[CategoryController::class,'storeCategory']);
Route::get('destroyCategory/{cate_id_pk}',[CategoryController::class,'destroyCategory'])->name('destroyCategory');

Route::get('admission-form',[AdmissionController::class,'index'])->middleware('auth');
Route::post('store',[AdmissionController::class,'store']);
// Route::get('student-list', function () {
//     return view('student-list');
// });

Route::get('student-list',[StudentController::class,'index']);
//Route::get('destroy/{admission_id_pk}',[StudentController::class,'destroy'])->name('destroy');
Route::get('fees-type',[FeesTypeController::class,'index'])->middleware('auth');
Route::post('store',[FeesTypeController::class,'store']);
Route::get('destroyFeesType/{fees_type_id_pk}',[FeesTypeController::class,'destroyFeesType']);


Route::get('fine-setup',[FineSetupController::class,'index']);
Route::post('fineSetupStore',[FineSetupController::class,'fineSetupStore']);
Route::get('fineSetupDestroy/{fine_setup_id_pk}',[FineSetupController::class,'fineSetupDestroy']);

// Employee Routes
Route::get('department',[EmployeeController::class,'departmentView']);
Route::post('storeDepartment',[EmployeeController::class,'storeDepartment']);
Route::get('destroyDepartment/{department_id_pk}',[EmployeeController::class,'destroyDepartment']);
Route::get('designation',[EmployeeController::class,'viewDesignation']);
Route::post('storeDesignation',[EmployeeController::class,'storeDesignation']);
Route::get('destroyDesignation/{designation_id_pk}',[EmployeeController::class,'destroyDesignation']);
Route::get('add-employee',[EmployeeController::class,'addEmployeeView']);
Route::post('storeEmployee',[EmployeeController::class,'storeEmployee']);
Route::get('employees',[EmployeeController::class,'employeeListing']);
Route::get('destroyList/{employee_id_pk}',[EmployeeController::class,'destroyList']);

// Student Class Routes

Route::get('section',[ClassController::class,'sectionView']);
Route::post('storeSection',[ClassController::class,'storeSection']);
Route::get('deleteSection/{section_id_pk}',[ClassController::class,'deleteSection']);
#student add class routes
Route::get('student-class',[ClassController::class,'viewAddClass']);
Route::post('storeClass',[ClassController::class,'storeClass']);
Route::get('deleteClass/{add_class_id_pk}',[ClassController::class,'deleteClass']);
// Add Subject
Route::get('class-subject',[ClassController::class,'subjectView']);
Route::post('storeSubject',[ClassController::class,'storeSubject']);
Route::get('delteSubject/{subject_id_pk}',[ClassController::class,'delteSubject']);
// Class Assign Routes
Route::get('class-assign',[ClassController::class,'classAssignView']);
Route::post('storeClassAssign',[ClassController::class,'storeClassAssign']);



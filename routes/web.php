<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseFormController;

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



Route::middleware('guest')->group(function(){
	Route::redirect('/', '/login');
	Route::view('/login', 'login');
	Route::post('/profile',[StudentController::class,'loginAuth']); 
	Route::view('/admin','admin.admin_login');
	Route::view('/reg','reg');
	Route::post('/reg',[StudentController::class,'regUser']);
	Route::post('/admin_profile',[AdminController::class, 'AdminloginAuth']);
});



Route::middleware('auth:admin')->group(function(){
        Route::controller(StudentController::class)->group(function(){
         
        Route::view('/student_list','admin.student_list');
        Route::view('/edit_student','admin.student_edit'); 
        Route::view('/comsci','department.com-sci-nd1ft');
        Route::view('/comsci2','department.com-sci-nd2');
        Route::view('/comscih','department.com-sci-hnd1');
        Route::view('/comscih2','department.com-sci-hnd2');
        Route::view('/wc','department.wc');
        Route::view('/slt1', 'department.slt1');
        Route::view('/slt2', 'department.slt2');
        Route::view('/allslt', 'department.allslt');
        Route::view('/phy', 'department.physics1');
        Route::view('/phy2', 'department.physics2');
        Route::view('/allphy', 'department.allphy');
        Route::view('/bio', 'department.bio');
        Route::view('/bio2', 'department.bio2');
        Route::view('/chem', 'department.chem');
        Route::view('/chem2', 'department.chem2');
        Route::view('/allbio', 'department.allbio');
        Route::view('/allchem', 'department.allchem');
        Route::get('student_list', 'fetchStudent');
        Route::get('edit_student', 'editFetchedStudent');
        Route::get('edit/{id}', 'getEditPage');
        Route::get('delete_student', 'deleteStudent');
        Route::get('delete/{id}','deleteFetchedStudent');
        Route::get('editstudent/{id}', 'editingFetchedStudent');
        Route::post('update/{id}', 'updateStudent');
        Route::get('/comsci', 'ViewComFT');
        Route::get('/comsci2', 'ViewCom2');
        Route::get('/comscih', 'ViewComH');
        Route::get('/comscih2', 'ViewComH2');
        Route::get('/slt1', 'ViewSlt1');
        Route::get('/slt2', 'ViewSlt2');
        Route::get('/allslt', 'AllSlt');
        Route::get('/phy', 'ViewP');
        Route::get('/phy2', 'ViewP2');
        Route::get('/bio', 'ViewBio');
        Route::get('/bio2', 'ViewBio2');
        Route::get('/chem', 'ViewChem');
        Route::get('/chem2', 'ViewChem2');
        Route::get('/wc', 'Wc');
        Route::get('/allphy', 'AllPHY');
        Route::get('/allbio', 'AllBio');
        Route::get('/allchem', 'AllChem');


        

       
      
    });
	
	Route::controller(AdminController::class)->group(function(){
     
        Route::get('/admin_dashboard', 'AdminDashboard');
        Route::get('/admin_prof', 'AdminProfile');
        Route::view('/addAdmin','admin.admin_create'); 
        Route::view('/admin_profile','admin.admin_profile');
        Route::get('delete_admin', 'deleteAdmin');
        Route::view('/home',[AdminController::class, 'admin.admin_home']);
        Route::post('/addAdmin',[AdminController::class, 'CreateAdmin']);
        Route::get('/logout','logout');
    });

       
});

Route::middleware('auth')->group(function(){
	Route::controller(StudentController::class)->group(function(){
        Route::get('/view', 'ViewSubmitted');
        Route::get('stu_profile', 'studentDashboard');
        Route::get('/userprofile', 'studentProfile');
		Route::get('/logoutuser', 'logoutUser');
	});
   

});
Route::middleware('auth:admin')->group(function(){

    Route::controller(CourseController::class)->group(function(){
        Route::view('/create_course','admin.create_course'); 
        Route::post('create', 'Courses');
        Route::view('/data', 'admin.student_data');
        

    });
});

Route::middleware('auth')->group(function(){
    Route::controller(CourseController::class)->group(function(){
        Route::get('reg_course', 'ViewCourses');
        Route::post('course', 'SubmitCourse');
    });
 
});

Route::middleware('auth')->group(function(){
    Route::controller(CourseFormController::class)->group(function(){
               Route::post('course', 'SubmitCourse');
    });

 
});
<?php

use App\Http\Controllers\AppointmentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Models\Appointment;
use App\Models\Department;
use GuzzleHttp\Promise\Create;

Route::get('/', function () {
    return view('Home');
});
route::view('/test','Home');
route::get('/Courses',[CourseController::class,'index'])->name('courses.index');
route::get('/Courses/Create',[CourseController::class,'create'])->name('courses.create');
route::get('/Courses/{id}',[CourseController::class,'show'])->name('courses.show');
// route::post('/Courses',function(){
//     return "done";
// })->name('courses.store');
route::Post('/Courses',[CourseController::class,'store'])->name('courses.store');
route::get('/Courses/{id}/edit',[CourseController::class,'edit'])->name('courses.edit');
route::post('/Courses/update/{course}',[CourseController::class,'update'])->name('courses.update');
route::get('/Courses/delete/{course}',[CourseController::class,'destroy'])->name('courses.delete');



Route::get('/appointments/{id}/edit', [AppointmentController::class, 'edit'])->name('Appointment.edit');
Route::delete('/appointments/{id}', [AppointmentController::class, 'destroy'])->name('Appointment.destroy');
Route::put('/appointments/{id}', [AppointmentController::class, 'update'])->name('Appointment.update');
route::get('/Appointment/create',[AppointmentController::class,'create'])->name('Appointment.create');
route::Post('/appointment/store',[AppointmentController::class,'store'])->name('Appointment.store');
route::get('/appointment/index',[AppointmentController::class,'index'])->name('Appointment.index');





route::view('/departments','Department.show')->name('Department.show');
route::view('/doctors','Doctors.show')->name('Doctors.show');

Route::get('/get-doctors/{departmentId}', [DoctorController::class, 'getDoctorsByDepartment']);

//determine route(that user can access from prowser)
//determine controller that render view
//determine views cotains static data
//remove static data
//courses, students, instructors, enrolement(CRUd)

// create new coure
//display view with form 
//collect form data
//determine route and controller function(store)
//store new course in database
//redirect route to display index

//Course(id,name,description,price,duration)
//Student & instructor(id,name,address,phone,bd,email)

// structur db and tables
// create commands on data (select, insert, update, delete )
?>

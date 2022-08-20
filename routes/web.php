<?php

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

//use Illuminate\Routing\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Frontend\FrontendController@index');
Route::get('about-us','Frontend\FrontendController@aboutUs')->name('about.us');
Route::get('contact-us','Frontend\FrontendController@contactUs')->name('contact.us');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['middleware'=>'auth'], function(){
    Route::prefix('users')->group(function(){
        Route::get('/view', 'Backend\UserController@view')->name('users.view');
        Route::get('/add', 'Backend\UserController@add')->name('users.add');
        Route::post('/store', 'Backend\UserController@store')->name('users.store');
        Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
        Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
        Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
    });

    Route::prefix('profiles')->group(function(){
        Route::get('/view', 'Backend\ProfileController@view')->name('profiles.view');
        Route::get('/edit', 'Backend\ProfileController@edit')->name('profiles.edit');
        Route::post('/store', 'Backend\ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'Backend\ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'Backend\ProfileController@passwordUpdate')->name('profiles.password.update');
    });

    Route::prefix('setups')->group(function(){
        //student class
        Route::get('/student/class/view', 'Backend\Setup\StudentClassController@view')->name('setups.student.class.view');
        Route::get('/student/class/add', 'Backend\Setup\StudentClassController@add')->name('setups.student.class.add');
        Route::post('/student/class/store', 'Backend\Setup\StudentClassController@store')->name('setups.student.class.store');
        Route::get('/student/class/edit/{id}', 'Backend\Setup\StudentClassController@edit')->name('setups.student.class.edit');
        Route::post('/student/class/update/{id}', 'Backend\Setup\StudentClassController@update')->name('setups.student.class.update');
        Route::get('/student/class/delete/{id}', 'Backend\Setup\StudentClassController@delete')->name('setups.student.class.delete');

        //student session
        Route::get('/student/session/view', 'Backend\Setup\SessionController@view')->name('setups.student.session.view');
        Route::get('/student/session/add', 'Backend\Setup\SessionController@add')->name('setups.student.session.add');
        Route::post('/student/session/store', 'Backend\Setup\SessionController@store')->name('setups.student.session.store');
        Route::get('/student/session/edit/{id}', 'Backend\Setup\SessionController@edit')->name('setups.student.session.edit');
        Route::post('/student/session/update/{id}', 'Backend\Setup\SessionController@update')->name('setups.student.session.update');
        Route::get('/student/session/delete/{id}', 'Backend\Setup\SessionController@delete')->name('setups.student.session.delete');

        //student shift
        Route::get('/student/shift/view', 'Backend\Setup\ShiftController@view')->name('setups.student.shift.view');
        Route::get('/student/shift/add', 'Backend\Setup\ShiftController@add')->name('setups.student.shift.add');
        Route::post('/student/shift/store', 'Backend\Setup\ShiftController@store')->name('setups.student.shift.store');
        Route::get('/student/shift/edit/{id}', 'Backend\Setup\ShiftController@edit')->name('setups.student.shift.edit');
        Route::post('/student/shift/update/{id}', 'Backend\Setup\ShiftController@update')->name('setups.student.shift.update');
        Route::get('/student/shift/delete/{id}', 'Backend\Setup\ShiftController@delete')->name('setups.student.shift.delete');

        //student exam type
        Route::get('/exam/type/view', 'Backend\Setup\ExamTypeController@view')->name('setups.exam.type.view');
        Route::get('/exam/type/add', 'Backend\Setup\ExamTypeController@add')->name('setups.exam.type.add');
        Route::post('/exam/type/store', 'Backend\Setup\ExamTypeController@store')->name('setups.exam.type.store');
        Route::get('/exam/type/edit/{id}', 'Backend\Setup\ExamTypeController@edit')->name('setups.exam.type.edit');
        Route::post('/exam/type/update/{id}', 'Backend\Setup\ExamTypeController@update')->name('setups.exam.type.update');
        Route::get('/exam/type/delete/{id}', 'Backend\Setup\ExamTypeController@delete')->name('setups.exam.type.delete');

        //student subject assign
        Route::get('/subject.view', 'Backend\Setup\SubjectController@view')->name('setups.subject.view');
        Route::get('/subject.add', 'Backend\Setup\SubjectController@add')->name('setups.subject.add');
        Route::post('/subject.store', 'Backend\Setup\SubjectController@store')->name('setups.subject.store');
        Route::get('/subject.edit/{id}', 'Backend\Setup\SubjectController@edit')->name('setups.subject.edit');
        Route::post('/subject.update/{id}', 'Backend\Setup\SubjectController@update')->name('setups.subject.update');
        Route::get('/subject.delete/{id}', 'Backend\Setup\SubjectController@delete')->name('setups.subject.delete');
    });

    Route::prefix('students')->group(function(){
        Route::get('/reg/view', 'Backend\Student\StudentRegController@view')->name('students.registration.view');
        Route::get('/reg/add', 'Backend\Student\StudentRegController@add')->name('students.registration.add');
        Route::post('/reg/store', 'Backend\Student\StudentRegController@store')->name('students.registration.store');
        Route::get('/reg/edit/{student_id}', 'Backend\Student\StudentRegController@edit')->name('students.registration.edit');
        Route::post('/reg/update/{student_id}', 'Backend\Student\StudentRegController@update')->name('students.registration.update');
        Route::get('/session-class-wise', 'Backend\Student\StudentRegController@sessionClassWise')->name('students.session.class.wise');
        Route::get('/reg/promotion/{student_id}', 'Backend\Student\StudentRegController@promotion')->name('students.registration.promotion');
        Route::post('/reg/promotion/{student_id}', 'Backend\Student\StudentRegController@promotionStore')->name('students.registration.promotion.store');
        Route::get('/reg/details/{student_id}', 'Backend\Student\StudentRegController@details')->name('students.registration.details');

        //student registration fee
        Route::get('/reg/fee/view', 'Backend\Student\RegistrationFeeController@view')->name('students.registration.fee.view');
        Route::get('/reg/get-student', 'Backend\Student\RegistrationFeeController@getStudent')->name('students.registration.fee.get-student');
        Route::get('/reg/payslip', 'Backend\Student\RegistrationFeeController@paySlip')->name('students.registration.fee.payslip');

        //student monthly fee
        Route::get('/month/fee/view', 'Backend\Student\MonthlyFeeController@view')->name('students.monthly.fee.view');
        Route::get('/month/get-student', 'Backend\Student\MonthlyFeeController@getStudent')->name('students.monthly.fee.get-student');
        Route::get('/month/payslip', 'Backend\Student\MonthlyFeeController@paySlip')->name('students.monthly.fee.payslip');

         //student exam fee
         Route::get('/exam/fee/view', 'Backend\Student\ExamFeeController@view')->name('students.exam.fee.view');
         Route::get('/exam/get-student', 'Backend\Student\ExamFeeController@getStudent')->name('students.exam.fee.get-student');
         Route::get('/exam/payslip', 'Backend\Student\ExamFeeController@paySlip')->name('students.exam.fee.payslip');
    });

    Route::prefix('employees')->group(function(){
        Route::get('/reg/view', 'Backend\Employee\EmployeeRegController@view')->name('employees.registration.view');
        Route::get('/reg/add', 'Backend\Employee\EmployeeRegController@add')->name('employees.registration.add');
        Route::post('/reg/store', 'Backend\Employee\EmployeeRegController@store')->name('employees.registration.store');
        Route::get('/reg/edit/{id}', 'Backend\Employee\EmployeeRegController@edit')->name('employees.registration.edit');
        Route::post('/reg/update/{id}', 'Backend\Employee\EmployeeRegController@update')->name('employees.registration.update');
        Route::get('/reg/details/{id}', 'Backend\Employee\EmployeeRegController@details')->name('employees.registration.details');

        //employee salary
        Route::get('/salary/view', 'Backend\Employee\EmployeeSalaryController@view')->name('employees.salary.view');
        Route::get('/salary/increment/{id}', 'Backend\Employee\EmployeeSalaryController@increment')->name('employees.salary.increment');
        Route::post('/salary/store/{id}', 'Backend\Employee\EmployeeSalaryController@store')->name('employees.salary.store');
        Route::get('/salary/details/{id}', 'Backend\Employee\EmployeeSalaryController@details')->name('employees.salary.details');

        //employee leave
        Route::get('/leave/view', 'Backend\Employee\EmployeeLeaveController@view')->name('employees.leave.view');
        Route::get('/leave/add', 'Backend\Employee\EmployeeLeaveController@add')->name('employees.leave.add');
        Route::post('/leave/store', 'Backend\Employee\EmployeeLeaveController@store')->name('employees.leave.store');
        Route::get('/leave/edit/{id}', 'Backend\Employee\EmployeeLeaveController@edit')->name('employees.leave.edit');
        Route::post('/leave/update/{id}', 'Backend\Employee\EmployeeLeaveController@update')->name('employees.leave.update');

        //employee attendance
        Route::get('/attend/view', 'Backend\Employee\EmployeeAttendanceController@view')->name('employees.attendance.view');
        Route::get('/attend/add', 'Backend\Employee\EmployeeAttendanceController@add')->name('employees.attendance.add');
        Route::post('/attend/store', 'Backend\Employee\EmployeeAttendanceController@store')->name('employees.attendance.store');
        Route::get('/attend/edit/{id}', 'Backend\Employee\EmployeeAttendanceController@edit')->name('employees.attendance.edit');
        Route::post('/attend/update/{id}', 'Backend\Employee\EmployeeAttendanceController@update')->name('employees.attendance.update');
    });
});


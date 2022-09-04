<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Model\StudentMarks;
use App\Model\EmployeeSalaryLog;

class DatabaseTest extends TestCase
{
    Use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_users_database_has_certain_data()
    {
        $user = factory(User::class)->create();

        $this->assertDatabaseHas('users', [
            'email' => $user->email,
            'name' => $user->name,
            'mobile' => $user->mobile,
            'address' => $user->address,
            'gender' => $user->gender,
            'image' => $user->image,
            'religion' => $user->religion,
            'fname' => $user->fname,
            'mname' => $user->mname,
            'id_no' => $user->id_no,
            'dob' => $user->dob,
            'join_date' => $user->join_date,
            'designation_id' => $user->designation_id,
            'salary' => $user->salary
        ]);
    }

    public function test_student_marks_database_has_certain_data()
    {
        $marks = factory(StudentMarks::class)->create();

        $this->assertDatabaseHas('student_marks', [
            'student_id' => $marks->student_id,
            'year_id' => $marks->year_id,
            'class_id' => $marks->class_id,
            'assign_subject_id' => $marks->assign_subject_id,
            'exam_type_id' => $marks->exam_type_id,
            'marks' => $marks->marks,
            'grade' => $marks->grade
        ]);
    }

    public function test_employee_salary_logs_database_has_certain_data()
    {
        $salary_log = factory(EmployeeSalaryLog::class)->create();

        $this->assertDatabaseHas('employee_salary_logs', [
            'employee_id' => $salary_log->employee_id,
            'previous_salary' => $salary_log->previous_salary,
            'present_salary' => $salary_log->present_salary,
            'increment_salary' => $salary_log->increment_salary,
            'effected_date' => $salary_log->effected_date
        ]);
    }
}

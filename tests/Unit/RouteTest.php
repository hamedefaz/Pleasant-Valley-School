<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_users_view()
    {
        $this->setUpUser();

        $response = $this->get('/users/view');
        $response->assertStatus(200);
    }

    public function test_users_add()
    {
        $this->setUpUser();

        $response = $this->get('/users/add');
        $response->assertStatus(200);
    }

    public function test_users_edit()
    {
        $this->setUpUser();

        $response = $this->get('/users/edit/1');
        $response->assertStatus(200);
    }

    public function test_profiles_view()
    {
        $this->setUpUser();

        $response = $this->get('/profiles/view');
        $response->assertStatus(200);
    }

    public function test_profiles_edit()
    {
        $this->setUpUser();

        $response = $this->get('/profiles/edit');
        $response->assertStatus(200);
    }

    public function test_profiles_password_view()
    {
        $this->setUpUser();

        $response = $this->get('/profiles/password/view');
        $response->assertStatus(200);
    }

    public function test_setups_student_class_view()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/class/view');
        $response->assertStatus(200);
    }

    public function test_setups_student_class_add()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/class/add');
        $response->assertStatus(200);
    }

    public function test_setups_student_class_edit()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/class/edit/1');
        $response->assertStatus(200);
    }

    public function test_setups_student_session_view()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/session/view');
        $response->assertStatus(200);
    }

    public function test_setups_student_session_add()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/session/add');
        $response->assertStatus(200);
    }

    public function test_setups_student_session_edit()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/session/edit/1');
        $response->assertStatus(200);
    }

    public function test_setups_student_shift_view()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/shift/view');
        $response->assertStatus(200);
    }

    public function test_setups_student_shift_add()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/shift/add');
        $response->assertStatus(200);
    }

    public function test_setups_student_shift_edit()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/shift/edit/1');
        $response->assertStatus(200);
    }

    public function test_setups_student_exam_type_view()
    {
        $this->setUpUser();

        $response = $this->get('/setups/exam/type/view');
        $response->assertStatus(200);
    }

    public function test_setups_student_exam_type_add()
    {
        $this->setUpUser();

        $response = $this->get('/setups/exam/type/add');
        $response->assertStatus(200);
    }

    public function test_setups_student_exam_type_edit()
    {
        $this->setUpUser();

        $response = $this->get('/setups/exam/type/edit/1');
        $response->assertStatus(200);
    }

    public function test_setups_student_subject_assign_view()
    {
        $this->setUpUser();

        $response = $this->get('/setups/subject.view');
        $response->assertStatus(200);
    }

    public function test_setups_student_subject_assign_add()
    {
        $this->setUpUser();

        $response = $this->get('/setups/subject.add');
        $response->assertStatus(200);
    }

    public function test_setups_student_subject_assign_edit()
    {
        $this->setUpUser();

        $response = $this->get('/setups/subject.edit/1');
        $response->assertStatus(200);
    }

    public function test_students_registration_add()
    {
        $this->setUpUser();

        $response = $this->get('/students/reg/add');
        $response->assertStatus(200);
    }

    public function test_students_registration_edit()
    {
        $this->setUpUser();

        $response = $this->get('/students/reg/edit/8');
        $response->assertStatus(200);
    }

    public function test_students_session_class_wise()
    {
        $this->setUpUser();

        $response = $this->get('/students/session-class-wise');
        $response->assertStatus(200);
    }

    public function test_students_registration_fee_view()
    {
        $this->setUpUser();

        $response = $this->get('/students/reg/fee/view');
        $response->assertStatus(200);
    }

    public function test_students_monthly_fee_view()
    {
        $this->setUpUser();

        $response = $this->get('/students/month/fee/view');
        $response->assertStatus(200);
    }

    public function test_students_exam_fee_view()
    {
        $this->setUpUser();

        $response = $this->get('/students/exam/fee/view');
        $response->assertStatus(200);
    }

    public function test_employees_registration_view()
    {
        $this->setUpUser();

        $response = $this->get('/employees/reg/view');
        $response->assertStatus(200);
    }

    public function test_employees_registration_add()
    {
        $this->setUpUser();

        $response = $this->get('/employees/reg/add');
        $response->assertStatus(200);
    }

    public function test_employees_registration_edit()
    {
        $this->setUpUser();

        $response = $this->get('/employees/reg/edit/13');
        $response->assertStatus(200);
    }

    public function test_employees_salary_view()
    {
        $this->setUpUser();

        $response = $this->get('/employees/salary/view');
        $response->assertStatus(200);
    }

    public function test_employees_leave_view()
    {
        $this->setUpUser();

        $response = $this->get('/employees/leave/view');
        $response->assertStatus(200);
    }

    public function test_employees_leave_add()
    {
        $this->setUpUser();

        $response = $this->get('/employees/leave/add');
        $response->assertStatus(200);
    }

    public function test_employees_leave_edit()
    {
        $this->setUpUser();

        $response = $this->get('/employees/leave/edit/13');
        $response->assertStatus(200);
    }

    public function test_employees_attendance_view()
    {
        $this->setUpUser();

        $response = $this->get('/employees/attend/view');
        $response->assertStatus(200);
    }

    public function test_employees_attendance_add()
    {
        $this->setUpUser();

        $response = $this->get('/employees/attend/add');
        $response->assertStatus(200);
    }

    public function test_marks_view()
    {
        $this->setUpUser();

        $response = $this->get('/marks/view');
        $response->assertStatus(200);
    }

    public function test_marks_add()
    {
        $this->setUpUser();

        $response = $this->get('/marks/add');
        $response->assertStatus(200);
    }

    public function test_reports_id_card_view()
    {
        $this->setUpUser();

        $response = $this->get('/reports/id-card/view');
        $response->assertStatus(200);
    }

    public function test_reports_attendance_view()
    {
        $this->setUpUser();

        $response = $this->get('/reports/attendance/view');
        $response->assertStatus(200);
    }
}

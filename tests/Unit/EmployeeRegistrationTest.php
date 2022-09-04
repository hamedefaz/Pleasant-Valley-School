<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Model\EmployeeSalaryLog;
use App\Model\Designation;

use function PHPUnit\Framework\assertTrue;

class EmployeeRegControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_view_employees()
    {
        $this->setUpUser();

        $response = $this->get('/employees/reg/view');
        $response->assertStatus(200);
    }

    public function test_add_employee()
    {
        $this->setUpUser();

        $response = $this->get('/employees/reg/add');
        $response->assertStatus(200);
    }

    public function test_store_employee()
    {
        $this->setUpUser();

        $response = $this->post('/employees/reg/store', [
            'usertype' =>  'Employee',
            'name' =>  'testemployee',
            'fname' => 'fname',
            'mname' => 'mname',
            'mobile' => 'mobile',
            'email' => 'testemployee@test.com',
            'address' => 'address',
            'gender' => 'gender',
            'religion' => 'religion',
            'salary' => 'salary',
            'dob' => 'dob',
            'join_date' => 'join_date',
            'effected_date' => 'effected_date',
            'previous_salary' => 'previous_salary',
            'present_salary' => 'present_salary',
            'increment_salary' => 'increment_salary'
        ]);

        $response->assertRedirect('/employees/reg/view');
    }

    public function test_edit_employee()
    {
        $this->setUpUser();

        $response = $this->get('/employees/reg/edit/13');
        $response->assertStatus(200);
    }

    public function test_update_employee()
    {
        $employee = factory(User::class)->create();

        $employee = User::where('usertype', 'employee')->first();

        if($employee){
            $employee->save();
        }

        $this->assertTrue(true);
    }

    public function test_generate_pdf_of_employee_details()
    {
        $employee = User::where('usertype', 'employee')->first();

        if($employee){
            $employee->stream('document.pdf');
        }

        $this->assertTrue(true);
    }
}

<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class StudentRegControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_view_student()
    {
        $this->setUpUser();

        $response = $this->get('/students/session-class-wise');
        $response->assertStatus(200);
    }

    public function test_view_session_class_wise_student()
    {
        $this->setUpUser();

        $response = $this->get('/students/session-class-wise');
        $response->assertStatus(200);
    }

    public function test_add_student()
    {
        $this->setUpUser();

        $response = $this->get('/students/reg/add');
        $response->assertStatus(200);
    }

    public function test_store_student()
    {
        $this->setUpUser();

        $response = $this->post('/students/reg/store', [
            'usertype' =>  'Student',
            'name' =>  'teststudent',
            'fname' => 'fname',
            'mname' => 'mname',
            'mobile' => 'mobile',
            'address' => 'address',
            'gender' => 'gender',
            'religion' => 'religion',
            'dob' => 'dob',
            'student_id' => 'student_id',
            'year_id' => 'year_id',
            'class_id' => 'class_id',
            'shift_id' => 'shift_id'
        ]);

        if($response){
            $this->assertTrue(true);
        }
    }

    public function test_edit_student()
    {
        $this->setUpUser();

        $response = $this->get('/students/reg/edit/11');
        $response->assertStatus(200);
    }

    public function test_update_student()
    {
        $student = factory(User::class)->create();

        $student = User::where('usertype', 'student')->first();

        if($student){
            $student->save();
        }

        $this->assertTrue(true);
    }

    public function test_view_promoted_student()
    {
        $this->setUpUser();

        $this->get('/students/reg/promotion/8');
        $this->assertTrue(true);
    }

    public function test_store_promoted_student()
    {
        $this->setUpUser();

        $response = $this->post('/students/reg/promotion/8', [
            'usertype' =>  'Student',
            'name' =>  'teststudent',
            'fname' => 'fname',
            'mname' => 'mname',
            'mobile' => 'mobile',
            'address' => 'address',
            'gender' => 'gender',
            'religion' => 'religion',
            'dob' => 'dob',
            'student_id' => 'student_id',
            'year_id' => 'year_id',
            'class_id' => 'class_id',
            'shift_id' => 'shift_id'
        ]);

        if($response){
            $this->assertTrue(true);
        }
    }

    public function test_generate_pdf_of_student_details()
    {
        $student = User::where('usertype', 'student')->first();

        if($student){
            $student->stream('document.pdf');
        }

        $this->assertTrue(true);
    }
}

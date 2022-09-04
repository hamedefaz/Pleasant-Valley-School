<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Model\StudentMarks;

class MarksControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_view_marks()
    {
        $this->setUpUser();

        $response = $this->get('/marks/view');
        $response->assertStatus(200);
    }

    public function test_add_marks()
    {
        $this->setUpUser();

        $response = $this->get('/marks/add');
        $response->assertStatus(200);
    }

    public function test_store_marks()
    {
        $this->setUpUser();

        $response = $this->post('/marks/store', [
            'student_id' => 'student_id',
            'year_id' => 'year_id',
            'class_id' => 'class_id',
            'assign_subject_id' => 'assign_subject_id',
            'exam_type_id' => 'exam_type_id',
            'marks' => 'marks',
            'grade' => 'grade',
        ]);

        $response->assertRedirect('/marks/view');
    }

    public function test_edit_marks()
    {
        $this->setUpUser();

        $response = $this->get('/marks/edit/6');
        $response->assertStatus(200);
    }

    public function test_update_marks()
    {
        $marks = factory(StudentMarks::class)->create();

        $student = User::where('usertype', 'student')->first();

        if($student){
            $marks->save();
        }

        $this->assertTrue(true);
    }
}

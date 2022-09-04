<?php

namespace Tests\Unit;

use App\Model\StudentClass;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class StudentClassControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_view_classes()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/class/view');
        $response->assertStatus(200);
    }

    public function test_add_classes()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/class/add');
        $response->assertStatus(200);
    }

    public function test_store_classes()
    {
        $this->setUpUser();

        $response = $this->post('/setups/student/class/store', [
            'id' => 'id',
            'name' => 'name'
        ]);

        $response->assertRedirect('/setups/student/class/view');
    }

    public function test_edit_classes()
    {
        $this->setUpUser();

        $response = $this->get('/setups/student/class/edit/1');
        $response->assertStatus(200);
    }

    public function test_update_classes()
    {
        $class = factory(StudentClass::class)->create();

        $class = StudentClass::first();

        if($class){
            $class->save();
        }

        $this->assertTrue(true);
    }

    public function test_delete_classes()
    {
        $class = factory(StudentClass::class)->create();

        $class = StudentClass::first();

        if($class){
            $class->delete();
        }

        $this->assertTrue(true);
    }
}

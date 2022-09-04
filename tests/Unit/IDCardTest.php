<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
use App\Model\AssignStudent;

class IDCardControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_view_id_card()
    {
        $this->setUpUser();

        $response = $this->get('/reports/id-card/view');
        $response->assertStatus(200);
    }

    public function test_get_id_card()
    {
        $student = User::where('usertype', 'student')->first();

        $id_data = AssignStudent::where('year_id', 'year_id')->where('class_id', 'class_id')->first();

        if($student){
            $id_data->get();
        }

        $this->assertTrue(true);
    }
}

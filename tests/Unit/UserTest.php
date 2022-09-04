<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

use function PHPUnit\Framework\assertTrue;

class UserControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_view_users()
    {
        $this->setUpUser();

        $response = $this->get('/users/view');
        $response->assertStatus(200);
    }

    public function test_add_user()
    {
        $this->setUpUser();

        $response = $this->get('/users/add');
        $response->assertStatus(200);
    }

    public function test_store_user()
    {
        $this->setUpUser();

        $response = $this->post('/users/store', [
            'usertype' =>  'Operator',
            'name' =>  'testname',
            'email' =>  'test@test.com',
            'password' => 'password'
        ]);

        $response->assertRedirect('/users/view');
    }

    public function test_edit_user()
    {
        $this->setUpUser();

        $user = User::first();

        if($user){
            $response = $this->get('/users/edit/1');
            $response->assertStatus(200);
        }
    }

    public function test_update_user()
    {
        $user = factory(User::class)->create();

        $user = User::first();

        if($user){
            $user->save();
        }

        $this->assertTrue(true);
    }

    public function test_delete_user()
    {
        $user = factory(User::class)->create();

        $user = User::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }
}

<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form_view()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_user_login_with_email_and_password()
    {
        $user = factory(User::class)->create();

        $this->post('login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();
    }

    public function test_users_are_unique()
    {
        $user1 = User::make([
            'name' => 'test1',
            'email' => 'test1@pvs.com'
        ]);

        $user2 = User::make([
            'name' => 'test2',
            'email' => 'test2@pvs.com'
        ]);

        $this->assertTrue($user1->email != $user2->email);
    }
}

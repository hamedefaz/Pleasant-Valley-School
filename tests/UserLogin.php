<?php
namespace Tests;
use App\User;

trait UserLogin
{
    public $user;

    public function setUpUser(){
        $this->user = factory(User::class)->create();

        $response = $this->post('login', [
            'email' => $this->user->email,
            'password' => 'password'
        ]);

        $this->assertAuthenticated();
    }
}

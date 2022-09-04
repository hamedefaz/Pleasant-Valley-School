<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FrontendControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_index_reachability()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_aboutus_reachability()
    {
        $response = $this->get('/about-us');
        $response->assertStatus(200);
    }

    public function test_contactus_reachability()
    {
        $response = $this->get('/contact-us');
        $response->assertStatus(200);
    }
}

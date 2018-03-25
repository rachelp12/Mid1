<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UsersTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Test insert user
     *
     * @return void
     */
    public function testInsertUser()
    {
        $user = new User();
        $user -> name = 'Ruiqi';
        $user -> email = 'rs858@njit.edu';
        $user -> password = 'password';

        $this->assertTrue($user -> save());
    }
}

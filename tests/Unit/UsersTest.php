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
        $user -> email = 'rs858'.rand(1,999999).'@njit.edu';
        $user -> password = 'password';

        $this->assertTrue($user -> save());
    }


    /**
     * Test update user name
     *
     * @return void
     */
    public function testUpdateUserName()
    {
        $user = User::find(1);
        $user -> name = 'Steve Smith';
        $this->assertTrue($user -> save());
        $this->assertTrue($user -> name == 'Steve Smith');
    }
}

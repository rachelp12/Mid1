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

    /**
     * Test delete user
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $user = new User();
        $user -> name = 'Ruiqi';
        $user -> email = 'rs858'.rand(1,999999).'@njit.edu';
        $user -> password = 'password';
        $user -> save();
        $this->assertTrue($user -> delete());
    }

    /**
     * Test seed user count
     * Note: for previous tests I create test for adding updating and deleting user so
     * the total number will not be 50 any more. As a result, when couting, we need to 
     * filter out those users that are not created by seeding.
     * @return void
     */
    public function testSeedUserCount()
    {
        // filter out my previous test data which uses password 'password'
        $user = User::where('password', '!=', 'password');
        $userCount = $user -> count();
        echo $userCount;
        $this->assertEquals($userCount, 50);
    }
}

<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarsTest extends TestCase
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
     * Test insert a car
     *
     * @return void
     */
    public function testInsertCar()
    {
        $car = new Car();
        $car -> Make = 'honda';
        $car -> Model = 'civic';
        $car -> Year = '1999';
        $this->assertTrue($car -> save());
    }

    /**
     * Test update car year to 2000
     *
     * @return void
     */
    public function testUpdateUserName()
    {
        $car = Car::find(1);
        $car -> Year = 2000;
        $this->assertTrue($car -> save());
        $this->assertTrue($car -> Year == 2000);
    }

}

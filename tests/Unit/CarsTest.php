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
    public function testUpdateCarYear()
    {
        $car = Car::find(1);
        $car -> Year = 2000;
        $this->assertTrue($car -> save());
        $this->assertTrue($car -> Year == 2000);
    }

    /**
     * Test delete car
     *
     * @return void
     */
    public function testDeleteCar()
    {
        $car = new Car();
        $car -> Make = 'honda';
        $car -> Model = 'civic';
        $car -> Year = '1999';
        $car -> save();
        $this->assertTrue($car -> delete());
    }

    /**
     * Test seed car count
     * Note: Since we can not tell the difference between seed car data and test car data created
     * above. I use the create time to filter out not seed data. 
     * @return void
     */
    public function testSeedCarCount()
    {
        // filter out data created after I create the seed data
        $car = Car::where('created_at', '<', '2018-03-25 15:59:59');
        $carCount = $car -> count();
        $this->assertEquals($carCount, 50);
    }

    /**
     * Test car year is integer
     *
     * @return void
     */
    public function testCarYearIsInteger()
    {
        $car = Car::find(1);
        // https://phpunit.readthedocs.io/en/latest/assertions.html#assertstringmatchesformat
        $this->assertStringMatchesFormat('%d', $car -> Year);
    }


}

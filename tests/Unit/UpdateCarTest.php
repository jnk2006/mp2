<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCar()
    {
        $cars = Car::all();
        $car = Car::find(23);
        $car->year = 2000;
        $car->save();
        $this->assertDatabaseHas('cars', ["year" => '2000']);
    }
}

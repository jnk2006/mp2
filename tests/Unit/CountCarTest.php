<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CountCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCount()
    {
        $cars = Car::all();
        $cars->count();
        $this->assertEquals(50, count($cars));
    }
}

<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Env;

use function PHPUnit\Framework\assertEquals;

class EnviromentTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_getEnv()
    {
        $youtube = Env::get('YOUTUBE');

        self::assertEquals('Programmer Zaman Now', $youtube);
    }
}

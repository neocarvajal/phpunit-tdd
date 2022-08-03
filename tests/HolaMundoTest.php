<?php

namespace App\Test;

use PHPUnit\Framework\TestCase;
use App\HolaMundo;

class HolaMundoTest extends TestCase 
{
    /**
     * @covers \App\HolaMundo::saluda
     */
    public function testDiceHolaMundoCuandoSaluda()
    {
        $holaMundo = new HolaMundo();

        $this->assertEquals('Hola Mundo', $holaMundo->saluda());
    }
}
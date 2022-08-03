<?php

namespace App\Test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    
    public function testCuandoLeDoyElNumeroTresMeDevuelveFizz(): void {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero(3);

        $this->assertEquals('Fizz', $resultado);
    }
    
    public function testCuandoLeDoyElNumeroCincoMeDevuelveBuzz(): void {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero(5);

        $this->assertEquals('Buzz', $resultado);
    }
    
    public function testCuandoLeDoyElNumeroQuinceMeDevuelveFizzBuzz(): void {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero(15);

        $this->assertEquals('FizzBuzz', $resultado);
    }
    
    public function testCuandoLeDoyElNumeroUnoMeDevuelveUno(): void {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero(1);

        $this->assertEquals(1, $resultado);
    }

}
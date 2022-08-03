<?php 

namespace App\Test;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzDataProviderTest extends TestCase
{

 public function casosDeUso(): array
    {
        return [
            [3, 'Fizz'],
            [5, 'Buzz'],
            [15, 'FizzBuzz'],
            [1, 1]
        ];
    }

    /** 
     * @dataProvider casosDeUso
    */

    public function testFizzBuzz($numeroPrueba, $resultadoEsperado)
    {
        $fizzBuzz = new FizzBuzz();

        $resultado = $fizzBuzz->diNumero($numeroPrueba);

        $this->assertEquals($resultadoEsperado, $resultado);
    }

    public function testLaCuentaEsCeroSiNadieHaDichoUnNumero()
    {
        $fizzBuzz = new FizzBuzz();

        $this->assertEquals(0, $fizzBuzz->dimeLaCuenta());
    }

    public function testLaCuentaSeIncrementaCuandoDecimosNumero()
    {
        $fizzBuzz = new FizzBuzz();

        $fizzBuzz->diNumero(1);
        $fizzBuzz->diNumero(2);

        $this->assertEquals(2, $fizzBuzz->dimeLaCuenta());

    }
}
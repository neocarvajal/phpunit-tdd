<?php 

namespace App;

class FizzBuzz 
{
    private int $cuenta = 0;

    public function dimeLaCuenta(): int 
    {
        return $this->cuenta;
    }

    public function diNumero(int $numero): string
    {
        ++$this->cuenta;

        if($numero % 3 == 0 && $numero % 5 == 0) {
            return "FizzBuzz";
        } elseif ($numero % 3 == 0) {
            return "Fizz";
        } elseif ($numero % 5 == 0) {
            return "Buzz";
        } else {
            return $numero;
        }
    }
}
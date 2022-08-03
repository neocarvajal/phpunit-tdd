<?php

namespace App\Test;

use App\TipoDeRopaMock;
use App\TiempoApi;
use PHPUnit\Framework\TestCase;

class TipoDeRopaMockTest extends TestCase
{
    private TiempoApi $tiempoApi;
    private TipoDeRopaMock $tipoDeRopa;

    public function setUp(): void
    {
        parent::setUp();
        
        $this->tiempoApi = $this->getMockBuilder(TiempoApi::class)->getMock();
        $this->tipoDeRopa = new TipoDeRopaMock($this->tiempoApi);
    }

    public function testDeterminaFranelasCuandoHaceMasDe18Grados()
    {
        $this->tiempoApi->expects($this->once())->method('queTemperaturaHaceEn')->willReturn(20);
        
        $ropa = $this->tipoDeRopa->determina('Merida');

        $this->assertEquals('Franelas', $ropa);
    }

    public function testDeterminaSueterCuandoHaceMenosDe10Grados()
    {
        
        $this->tiempoApi->expects($this->once())->method('queTemperaturaHaceEn')->willReturn(9);
        
        $ropa = $this->tipoDeRopa->determina('Merida');

        $this->assertEquals('Sueters', $ropa);
    }

    public function testDeterminaCamisasCuandoHaceEntre10y18Grados()
    {
        
        $this->tiempoApi->expects($this->once())->method('queTemperaturaHaceEn')->willReturn(15);
        
        $ropa = $this->tipoDeRopa->determina('Merida');

        $this->assertEquals('Camisas', $ropa);
    }

    public function testCompruebaElTiempoEnLaCiudadIndicada()
    {
        $ciudad = 'Merida';
        $numeroAleatorio = 12345;
        
        $this->tiempoApi->expects($this->once())->method('queTemperaturaHaceEn')->with($ciudad)->willReturn($numeroAleatorio);
       
        $this->tipoDeRopa->determina($ciudad);
    }

    public function testLanzaExcepcionSiLaCiudadEstaVacia()
    {

        $this->expectException(\Exception::class);
        
        $this->tipoDeRopa->determina('');
    }

}
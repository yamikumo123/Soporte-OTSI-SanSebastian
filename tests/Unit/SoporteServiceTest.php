<?php

namespace Tests\Unit;

use App\Services\SoporteService;
use PHPUnit\Framework\TestCase;

class SoporteServiceTest extends TestCase
{
    public function test_asigna_prioridad_alta_para_incidentes_criticos_otsi(): void
    {
        $service = new SoporteService;

        // Probar categoría de red
        $resultadoRed = $service->calcularPrioridad('Redes / Internet');
        $this->assertEquals('ALTA', $resultadoRed['prioridad']);
        $this->assertEquals(2, $resultadoRed['horas_estimadas']);

        // Probar categoría de sistema clave
        $resultadoSistema = $service->calcularPrioridad('Sistema SIGA/SIAF');
        $this->assertEquals('ALTA', $resultadoSistema['prioridad']);
    }

    public function test_asigna_prioridad_media_para_mantenimiento_impresoras(): void
    {
        $service = new SoporteService;

        $resultado = $service->calcularPrioridad('Impresoras / Hardware');
        $this->assertEquals('MEDIA', $resultado['prioridad']);
        $this->assertEquals(6, $resultado['horas_estimadas']);
    }
}

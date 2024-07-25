<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            ['categoria' => 'Administración y Oficina'],
            ['categoria' => 'Atención al Cliente'],
            ['categoria' => 'Ventas y Marketing'],
            ['categoria' => 'Finanzas y Contabilidad'],
            ['categoria' => 'Tecnología de la Información (TI)'],
            ['categoria' => 'Recursos Humanos'],
            ['categoria' => 'Salud y Medicina'],
            ['categoria' => 'Educación y Formación'],
            ['categoria' => 'Producción y Manufactura'],
            ['categoria' => 'Construcción y Mantenimiento'],
            ['categoria' => 'Logística y Transporte'],
            ['categoria' => 'Hostelería y Turismo'],
            ['categoria' => 'Creatividad y Diseño'],
            ['categoria' => 'Medios de Comunicación y Publicidad'],
            ['categoria' => 'Ciencias e Investigación'],
            ['categoria' => 'Servicios Sociales y Comunitarios'],
        ];

        Categoria::insert($datos);
    }
}

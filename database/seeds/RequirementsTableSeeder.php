<?php

use Illuminate\Database\Seeder;

class RequirementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reqs = [
            1 => [
                [
                    'Informe de Apertura (Online)',
                    '400'
                ],
                [
                    'Seguro cancelado (Nomina oficial DSA y Respaldo de Pago)',
                    '400'
                ],
                [
                    'Planificación del Club (Según Formato AMCH)',
                    '400'
                ],
                [
                    'Lista actualizada miembros del Club (Sistema División Sudamericana)',
                    '400'
                ],
                [
                    'Informes Mensuales (Online antes del día 15 del mes)',
                    '800'
                ],
            ],
            2 => [
                [
                    '80% Participación en reavivados por su Palabra (año bíblico)',
                    '500'
                ],
                [
                    'Curso de Lectura 2017 (Rescates emocionantes)',
                    '500'
                ],
            ],
            3 => [
                [
                    'Inscripción: 10% niños no adventistas (No adventistas/Listado total Ítem I.4)',
                    '350'
                ],
                [
                    'Inscripción: 20% niños no adventistas (No adventistas/Listado total Ítem I.4)',
                    '750'
                ],
                [
                    'Capellán para el Club',
                    '500'
                ],
                [
                    'Clase Bíblica con 20% niños del club (Niños en clase/Niños Club*100 )',
                    '900'
                ],
                [
                    'Clase Bíblica con 30% niños del club (Niños en clase/Niños Club *100)',
                    '1200'
                ],
                [
                    'Celebración semana y día del Conquistador (2-9 septiembre)',
                    '600'
                ],
                [
                    'Bautismo Día del Conquistador',
                    '900'
                ],
                [
                    'Evangelismo (día de la Madre y Padre; impacto esperanza )',
                    '600'
                ],
                [
                    'Bautismo dos (2) fechas libres en el año',
                    '600'
                ],
            ],
            4 => [
                [
                    'Realización de un campamento en el año (del club)',
                    '1000'
                ],
                [
                    'Participación en los campamentos zonales 2-4 junio',
                    '1000'
                ],
                [
                    'Participación en "Desafío Outdoor 2017 "',
                    '1000'
                ],
                [
                    'Participación en convención 2017',
                    '1000'
                ],
                [
                    'Clubes con grupos pequeños (Duración Mínima 3 meses)',
                    '500'
                ],
            ],
            5 => [
                [
                    '80% Clases Regulares Terminadas (Niños + Lideres)',
                    '800'
                ],
                [
                    '80% Clases Avanzadas Terminadas (Niños + Lideres)',
                    '1000'
                ],
                [
                    'Investidura de al menos 5 especialidades por miembro (Solicitud investidura)',
                    '1000'
                ],
                [
                    'Asistencia a Reuniones Generales (Según planificación AMCH)',
                    '400'
                ],
                [
                    'Participación de al menos 20% de los líderes del club en cursos o seminarios patrocinados por la AMCH',
                    '750'
                ],
            ],
        ];

        /*
        [
            '',
            ''
        ],
         */

        foreach ($reqs as $cat => $category){
            foreach ($category as $req){
                DB::table('requirements')->insert([
                    'description' => $req[0],
                    'points' => $req[1],
                    'category_id' => $cat,
                ]);
            }

        }
    }
}

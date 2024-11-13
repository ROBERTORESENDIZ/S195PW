<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clientes')->insert([
            [
                'nombre'=>'Ivan',
                'apellido'=>'Gerra',
                'Correo'=>'iiguerra@gmail.com',
                'telefono'=>'23456783373'
            ],
            [
                'nombre'=>'Robert',
                'apellido'=>'Resendiz',
                'Correo'=>'roberto@gmail.com',
                'telefono'=>'25656783373'
            ],
            [
                'nombre'=>'Jera',
                'apellido'=>'Perez',
                'Correo'=>'perezj@gmail.com',
                'telefono'=>'23456784373'
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            [
                'first_name' => 'Alex Oscar',
                'last_name' => 'Gamarra Solis',
                'age' => 28,
                'gender' => 'Masculino',
                'dni' => 70218511,
                'blood_type' => 'A+',
                'phone' => 943124351,
                'email' => 'alex@gmail.com',
                'address' => 'Jr. Ramón Castilla 110'
            ],
            [
                'first_name' => 'María Perla',
                'last_name' => 'Saruc Main',
                'age' => 34,
                'gender' => 'Femenino',
                'dni' => 80218522,
                'blood_type' => 'A-',
                'phone' => 952312435,
                'email' => 'maria@gmail.com',
                'address' => 'Jr. Manuel Ruíz 230'
            ],
            [
                'first_name' => 'Julio Ramón',
                'last_name' => 'Quiroga Hasher',
                'age' => 52,
                'gender' => 'Masculino',
                'dni' => 23219913,
                'blood_type' => 'A+',
                'phone' => 977123331,
                'email' => 'julio@gmail.com',
                'address' => 'Jr. Enrique Palacios 202'
            ],
            [
                'first_name' => 'Mario Idalgo',
                'last_name' => 'Cuerbo Nieto',
                'age' => 18,
                'gender' => 'Masculino',
                'dni' => 80218511,
                'blood_type' => 'B+',
                'phone' => 932112351,
                'email' => 'mario@gmail.com',
                'address' => 'Jr. Manuel Ruiz 800'
            ],
            [
                'first_name' => 'María Rosa',
                'last_name' => 'Jara Uri',
                'age' => 40,
                'gender' => 'Femenino',
                'dni' => 62215777,
                'blood_type' => 'AB+',
                'phone' => 951774351,
                'email' => 'maría@gmail.com',
                'address' => 'Jr. Ramón Castilla 401'
            ],
            [
                'first_name' => 'Kevin Juan',
                'last_name' => 'Rodriguez Ezquivel',
                'age' => 49,
                'gender' => 'Masculino',
                'dni' => 78218555,
                'blood_type' => 'A+',
                'phone' => 934994351,
                'email' => 'kevin@gmail.com',
                'address' => 'Jr. Alfonso Ugarte 2020'
            ],
            [
                'first_name' => 'Cielo Celeste',
                'last_name' => 'Lázaro Peterson',
                'age' => 50,
                'gender' => 'Femenino',
                'dni' => 23888591,
                'blood_type' => 'A-',
                'phone' => 971661152,
                'email' => 'cielo@gmail.com',
                'address' => 'Jr. Francisco Bolognesi'
            ]
        ]);
    }
}

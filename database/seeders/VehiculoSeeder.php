<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Vehiculo::firstOrCreate(
            ['matricula' => '1234 BCD'],
            [
                'marca' => 'Toyota',
                'modelo' => 'Corolla',
                'anio_fabricacion' => '2018-01-15',
                'disponibilidad' => 'si',
                'combustible' => 'hibrido',
            ]
        );

        Vehiculo::firstOrCreate(
            ['matricula' => '5678 FGH'],
            [
                'marca' => 'Volkswagen',
                'modelo' => 'Golf',
                'anio_fabricacion' => '2016-06-10',
                'disponibilidad' => 'no',
                'combustible' => 'diesel',
            ]
        );

        Vehiculo::firstOrCreate(
            ['matricula' => '9101 JKL'],
            [
                'marca' => 'Renault',
                'modelo' => 'Clio',
                'anio_fabricacion' => '2020-03-20',
                'disponibilidad' => 'si',
                'combustible' => 'gasolina',
            ]
        );

        Vehiculo::firstOrCreate(
            ['matricula' => '2345 MRS'],
            [
                'marca' => 'Tesla',
                'modelo' => 'Model 3',
                'anio_fabricacion' => '2022-09-01',
                'disponibilidad' => 'si',
                'combustible' => 'electrico',
            ]
        );

        Vehiculo::firstOrCreate(
            ['matricula' => '6789 TVZ'],
            [
                'marca' => 'Ford',
                'modelo' => 'Focus',
                'anio_fabricacion' => '2015-11-30',
                'disponibilidad' => 'no',
                'combustible' => 'gasolina',
            ]
        );
    }
}

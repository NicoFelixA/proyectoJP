<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\MateriaSeeder;
use Database\Seeders\NoticiaSeeder;
use Database\Seeders\AlumnoMateriaSeeder;
use Database\Seeders\JustificantesSeeder;
use Database\Seeders\PasesSeeder;
use Database\Seeders\MisJustificantesSeeder;
use Database\Seeders\MisPasesSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AlumnoSeeder::class);
        $this->call(NoticiaSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(AlumnoMateriaSeeder::class);
        $this->call(JustificantesSeeder::class);        
        $this->call(PasesSeeder::class);
        $this->call(MisJustificantesSeeder::class);
        $this->call(MisPasesSeeder::class);


    }
}

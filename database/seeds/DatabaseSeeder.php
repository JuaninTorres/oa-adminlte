<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Tablas que serán eliminadas cada vez que corra un db:seed
     *
     * @var array
     */
    protected $tables = [
        'users',
    ];

    /**
     * Seeders que correrán en este mismo orden
     *
     * @var array
     */
    protected $seeders = [
        'UserTableSeeder',
    ];


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->cleanDatabase();
        foreach ($this->seeders as $seedClass)
        {
            $this->call($seedClass);
        }
    }

    /**
     * Limpieza de las tablas de la base de datos, para poder ejecutar de manera correcta los Seeders
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach ($this->tables as $table)
        {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}

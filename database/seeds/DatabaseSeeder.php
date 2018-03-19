<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PlataformaSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(DesarrolladoraSeeder::class);
    }
}

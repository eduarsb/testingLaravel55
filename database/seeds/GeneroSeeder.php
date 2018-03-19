<?php

use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_genero')->insert([
            [ 'id' => 1, 'nombre' => 'Plataformas'],
            [ 'id' => 2, 'nombre' => 'Sandbox'],
            [ 'id' => 3, 'nombre' => 'FPS'],
            [ 'id' => 4, 'nombre' => 'RPG'],
            [ 'id' => 5, 'nombre' => 'Puzzle'],
            [ 'id' => 6, 'nombre' => 'Peleas'],
            [ 'id' => 7, 'nombre' => 'MMO']
        ]);
    }
}

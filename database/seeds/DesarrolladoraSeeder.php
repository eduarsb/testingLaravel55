<?php

use Illuminate\Database\Seeder;

class DesarrolladoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_desarrolladora')->insert([
            [ 'id' => 1, 'nombre' => 'Rockstar', 'lugar' => 'X'],
            [ 'id' => 2, 'nombre' => 'Santa Monica', 'lugar' => 'Y'],
            [ 'id' => 3, 'nombre' => 'Naughty Dog', 'lugar' => 'Z'],
            [ 'id' => 4, 'nombre' => 'Guerrilla Games', 'lugar' => 'W'],
            [ 'id' => 5, 'nombre' => '2K', 'lugar' => 'Q']
        ]);
    }
}

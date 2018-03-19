<?php

use Illuminate\Database\Seeder;

class PlataformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_plataforma')->insert([
	        [ 'id' => 1, 'nombre' => 'PS4', 'descripcion' => 'Sony company'],
	        [ 'id' => 2, 'nombre' => 'PS3', 'descripcion' => 'Sony company'],
	        [ 'id' => 3, 'nombre' => 'PS2', 'descripcion' => 'Sony company'],
	        [ 'id' => 4, 'nombre' => 'PS', 'descripcion' => 'Sony company'],
	        [ 'id' => 5, 'nombre' => 'Xbox One', 'descripcion' => 'Microsoft'],
	        [ 'id' => 6, 'nombre' => 'Xbox 360', 'descripcion' => 'Microsoft'],
	        [ 'id' => 7, 'nombre' => 'Xbox', 'descripcion' => 'Microsoft'],
	        [ 'id' => 8, 'nombre' => 'Nintendo Switch', 'descripcion' => 'Nintendo'],
	        [ 'id' => 9, 'nombre' => 'Nintendo WII U', 'descripcion' => 'Nintendo'],
	        [ 'id' => 10, 'nombre' => 'Nintendo WII', 'descripcion' => 'Nintendo'],
	        [ 'id' => 11, 'nombre' => 'Nintendo N64', 'descripcion' => 'Nintendo']
	    ]);
    }
}

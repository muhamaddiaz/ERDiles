<?php

use Illuminate\Database\Seeder;

use \App\Materi;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Materi::insert(['link' => 'bagian1', 'judul' => 'Materi 1']);
        Materi::insert(['link' => 'bagian2', 'judul' => 'Materi 2']);
        Materi::insert(['link' => 'bagian3', 'judul' => 'Materi 3']);
        Materi::insert(['link' => 'bagian4', 'judul' => 'Materi 4']);
    }
}

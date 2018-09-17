<?php

use Illuminate\Database\Seeder;
use App\Mensagem;
class mensagensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mensagem::create([
            'titulo' => 'Mensagem 1',
            'descricao' => 'Texto mensagem 1',
            'autor' => 'Autor texto 1',
            
        ]);
        Mensagem::create([
            'titulo' => 'Mensagem 2',
            'descricao' => 'Texto mensagem 2',
            'autor' => '2018-10-01 13:15:00',
            
            ]);
    }
}

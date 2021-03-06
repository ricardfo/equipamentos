<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Emprestimo;

class EmprestimoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrada = [
            'codpes' => '10703080',
            'data_retirada' => '2020-06-28',
            'motivo' => 'Home Office',
            'patrimonio' => '008.00145',
            'status' => 'solicitado',
            'comentario' => '',
        ];
        Emprestimo::create($entrada);

        Emprestimo::factory()->count(10)->create();

    }
}

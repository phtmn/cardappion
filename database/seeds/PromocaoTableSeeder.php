<?php

use Illuminate\Database\Seeder;

class PromocaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            'user_id'           => 1,
            'descricao'         => 'Rodizio de Sushi',
            'valor_promocional' => 39.00,
            'data_inicio'      => '2019-03-09',
            'data_final'        => '2019-03-11'
        ]);
    }
}

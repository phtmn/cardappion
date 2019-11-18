<?php

use Illuminate\Database\Seeder;

class SuperTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    DB::table('super')->insert([
      'name'     => 'Yuri Canuto',
      'email'    => 'yuriasc@gmail.com',
      'password' => bcrypt('123123123'),
    ]);

    DB::table('super')->insert([
      'name'     => 'Pedro Nogueira',
      'email'    => 'pedro.nogueira@hossail.com.br',
      'password' => bcrypt('123123123'),
    ]);

    DB::table('super')->insert([
      'name'     => 'Pedro Nogueiraaaa',
      'email'    => 'pedro.nogueira@hotmail.com.br',
      'password' => bcrypt('123123123'),
    ]);
  }
}

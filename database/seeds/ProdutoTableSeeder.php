<?php

use Illuminate\Database\Seeder;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("insert into produtos
          (name,quantidade,valor,descricao)
          values (?,?,?,?)",
            ['geladeira',2, 590.00,'Gelo seco']);

        DB::insert("insert into produtos
          (name,quantidade,valor,descricao)
          values (?,?,?,?)",
            ['metralhadora',2, 590.00,'Mata ladrão']);

        DB::insert("insert into produtos
          (name,quantidade,valor,descricao)
          values (?,?,?,?)",
            ['martelo',2, 590.00,'Prega Prego']);
    }
}

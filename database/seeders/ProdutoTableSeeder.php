<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder {
   
    public function run(): void{
        $produtos = [
            [
                'id' => 1,
                'nome' => 'iPhone 13 Pro',
                'preco' => 1399.99,
                'quantidade' => 10,
            ],
            [
                'id' => 2,
                'nome' => 'Samsung Galaxy S21',
                'preco' => 1099.99,
                'quantidade' => 15,
            ],
            [
                'id' => 3,
                'nome' => 'Sony PlayStation 5',
                'preco' => 499.99,
                'quantidade' => 5,
            ],
            [
                'id' => 4,
                'nome' => 'LG OLED TV',
                'preco' => 1799.99,
                'quantidade' => 8,
            ],
            [
                'id' => 5,
                'nome' => 'Canon EOS R5',
                'preco' => 3799.99,
                'quantidade' => 3,
            ],
        ];
        DB::table('produtos')->insert($produtos);
    }
}

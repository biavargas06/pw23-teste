<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
        [    'name' => 'Camiseta',
            'price' => 40.5,
            'quantity' => 2,
        ],
        [
            'name' => 'Calça',
            'price' => 150.0,
            'quantity' => 3,
        ]]

    );
    }
}
